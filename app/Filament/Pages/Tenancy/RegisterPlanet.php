<?php

namespace App\Filament\Pages\Tenancy;

use App\Providers\Socialite\WHMCSProvider;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterPlanet extends RegisterTenant
{
    protected ?string $maxWidth = '5xl';

    protected static string $view = 'filament.pages.tenancy.register-planet';

    public static function getLabel(): string
    {
        return 'Create a planet';
    }

    /**
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'plans' => cache()->rememberForever('whmcs-plans', function () {
                return WHMCSProvider::api([
                    'action' => 'GetProducts',
                    'module' => 'licensing',
                    'gid' => config('services.whmcs.group_id'),
                ], 'products.product');
            }),
        ];
    }

    /**
     * @return array<Action | ActionGroup>
     */
    protected function getFormActions(): array
    {
        return [];
    }
}
