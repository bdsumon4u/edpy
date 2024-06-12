<?php

use App\Models\Planet;
use App\Models\User;
use Filament\Events\Auth\Registered;
use Filament\Http\Middleware\IdentifyTenant;
use Filament\Http\Middleware\SetUpPanel;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/whmcs-sync', function (Request $request) {
    if ($request->only($keys = ['api_username', 'api_password']) !== Arr::only(config('services.whmcs'), $keys)) {
        return response('Unauthorized', 401);
    }

    $user = User::query()->firstOrCreate($request->only('id'), [
        'password' => bcrypt(Str::password()),
    ] + $request->only(['name', 'email']));

    if ($user->wasRecentlyCreated) {
        tap($user, fn ($user) => event(new Registered($user)));
    }

    Planet::query()->upsert($request->licenses, ['id']);
    $user->planets()->syncWithoutDetaching(array_keys($request->licenses));

    return response('Synced', 200);
});

Route::any('/sms/{tenant}/bulk', function (Request $request) {
    info($request->collect('messages')->map(function ($message) use ($request) {
        $key = base64_decode($request->bulkID);
        $decrypt = function ($encrypted, $key, $iv) {
            $iv = base64_decode($iv);
            $data = base64_decode($encrypted);
            $plaintext = openssl_decrypt($data, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);

            return substr($plaintext, 0, -ord($plaintext[strlen($plaintext) - 1]));
        };

        return [
            'sender' => $decrypt($message['senderAddress'], $key, $message['originID']),
            'content' => $decrypt($message['messageBody'], $key, $message['contentID']),
        ];
    })->toJson(JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
});
