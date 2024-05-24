<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as DashboardPage;
use Illuminate\Contracts\View\View;

class Dashboard extends DashboardPage
{
    public function render(): View
    {
        cache()->remember('whmcs-sync:'.auth()->id(), now()->addDay(), function () {
            tap(auth()->user())->syncPlanets();
        });

        return parent::render();
    }
}
