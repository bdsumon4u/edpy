<?php

namespace App\Filament\Pages;

use App\Models\Planet;
use Filament\Pages\Dashboard as DashboardPage;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;

class Dashboard extends DashboardPage
{
    public function render(): View
    {
        // cache()->remember('whmcs-sync:'.auth()->id(), now()->addDay(), function () {
            $data = Http::get(config('services.whmcs.api_endpoint'), [
                'username' => config('services.whmcs.api_username'),
                'password' => config('services.whmcs.api_password'),
                'action' => 'GetClientsProducts',
                'clientid' => auth()->id(),
                'responsetype' => 'json',
            ])
                ->collect('products.product')
                ->filter(fn ($product) => $product['groupname'] == 'HotashPay')
                ->mapWithKeys(fn ($product) => [$product['id'] => [
                    'name' => current(array_filter($product['customfields']['customfield'], function ($field) {
                        return $field['name'] == 'License Name';
                    }))['value'] ?: $product['name'],
                    'expires_at' => $product['nextduedate'],
                    'status' => $product['status'],
                    'key' => $product['domain'],
                    'id' => $product['id'],
                ]])
                ->filter(fn ($product) => $product['key'])
                ->toArray();

            Planet::query()->upsert($data, ['id']);
            $this->planets()->syncWithoutDetaching(array_keys($data));
        // });

        return parent::render();
    }
}
