<?php

namespace App\Filament\Pages\Tenancy;

use Filament\Pages\Tenancy\RegisterTenant;
use Illuminate\Support\Facades\Http;

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
            'plans' => cache()->remember('whmcs-plans', now()->addDay(), function () {
                return Http::get(config('services.whmcs.api_endpoint'), [
                    'username' => config('services.whmcs.api_username'),
                    'password' => config('services.whmcs.api_password'),
                    'gid' => config('services.whmcs.group_id'),
                    'action' => 'GetProducts',
                    'module' => 'licensing',
                    'responsetype' => 'json',
                ])->json('products.product');
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
