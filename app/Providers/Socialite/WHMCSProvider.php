<?php

namespace App\Providers\Socialite;

use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;

class WHMCSProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * The separating character for the requested scopes.
     *
     * @var string
     */
    protected $scopeSeparator = ' ';

    public static function openID(?string $key = null)
    {
        return cache()->rememberForever('whmcs-openid', function () {
            return Http::get(config('services.whmcs.config_url'))->json();
        })[$key] ?? null;
    }

    public static function api($params = [], $key = null)
    {
        return Http::get(config('services.whmcs.api_endpoint'), [
            'username' => config('services.whmcs.api_username'),
            'password' => config('services.whmcs.api_password'),
            'responsetype' => 'json',
        ] + $params)->json($key);
    }

    public function getScopes()
    {
        return array_merge(parent::getScopes(), static::openID('scopes_supported'));
    }

    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase(static::openID('authorization_endpoint'), $state);
    }

    protected function getTokenUrl()
    {
        return static::openID('token_endpoint');
    }

    protected function getUserByToken($token)
    {
        $response = $this->getHttpClient()->get(static::openID('userinfo_endpoint'), [
            'headers' => ['Accept' => 'application/json'],
            'form_params' => ['access_token' => $token],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    protected function mapUserToObject(array $user)
    {
        return (new User)->setRaw($user)->map([
            'id' => static::api([
                'action' => 'GetClientsProducts',
                'email' => $user['email'],
            ], 'client.id'),
            'name' => $user['name'],
            'email' => $user['email'],
        ]);
    }
}
