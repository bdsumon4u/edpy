<?php

namespace App\Providers;

use App\Http\Responses\LogoutResponse;
use App\Providers\Socialite\WHMCSProvider;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse as LogoutResponseContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        Socialite::extend('whmcs', function ($app) {
            return Socialite::buildProvider(WHMCSProvider::class, $app['config']['services.whmcs']);
        });

        $this->app->singleton(LogoutResponseContract::class, LogoutResponse::class);
    }
}
