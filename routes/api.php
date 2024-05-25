<?php

use App\Models\Planet;
use App\Models\User;
use Filament\Events\Auth\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/whmcs-sync', function (Request $request) {
    info('whmcs-sync', $request->all());
    if ($request->only($keys = ['api_username', 'api_password']) !== Arr::only(config('services.whmcs'), $keys)) {
        return response('Unauthorized', 401);
    }

    $user = User::query()->firstOrCreate($request->only('id'), [
        'password' => bcrypt(Str::password()),
    ] + $request->only(['name', 'email']));

    if ($user->wasRecentlyCreated) {
        tap($user, fn ($user) => event(new Registered($user)));
        info('User created', $user->toArray());
    }
    info('User found', $user->toArray());

    Planet::query()->upsert($request->licenses, ['id']);
    info('Planets upserted', $request->licenses);
    $user->planets()->syncWithoutDetaching(array_keys($request->licenses));
    info('Planets synced', $user->planets->toArray());

    return response('Synced', 200);
});
