<?php

use App\Models\User;
use Filament\Events\Auth\Registered;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oauth/callback/whmcs', function (Request $request) {
    $user = Socialite::driver('whmcs')->user();

    $user = User::query()->firstOrCreate(['id' => $user->getId()], [
        'password' => bcrypt(Str::password()),
        'email' => $user->getEmail(),
        'name' => $user->getName(),
    ]);

    if ($user->wasRecentlyCreated) {
        tap($user, fn ($user) => event(new Registered($user)));
    }

    $user->syncPlanets();

    tap(Filament::getCurrentPanel()->auth())->login($user);

    return redirect(Filament::getHomeUrl());
})->middleware('panel:app');
