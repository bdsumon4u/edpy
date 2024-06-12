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
    $data = $request->collect('messages')->map(function ($message) use ($request) {
        $key = base64_decode($request->bulkID);
        $decrypt = fn ($encrypted, $key, $iv) => openssl_decrypt(base64_decode($encrypted), 'AES-256-CBC', $key, OPENSSL_RAW_DATA, base64_decode($iv));

        return [
            'sender' => $decrypt($message['senderAddress'], $key, $message['originID']),
            'content' => $decrypt($message['messageBody'], $key, $message['contentID']),
        ];
    })
    ->groupBy('sender')
    ->mapWithKeys(fn ($messages, $sender) => [trim($sender) => $messages->pluck('content')->join()])
    ->toJson(JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

    info($data);
});
