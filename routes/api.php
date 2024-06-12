<?php

use App\Http\Controllers\Api\MessageController;
use App\Jobs\BKashProcessor;
use App\Jobs\CellFinProcessor;
use App\Jobs\NagadProcessor;
use App\Jobs\RocketProcessor;
use App\Jobs\UpayProcessor;
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

Route::post('/sms/{tenant}/bulk', MessageController::class);
