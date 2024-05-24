<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'whmcs' => [
        'install_url' => env('WHMCS_INSTALL_URL'),
        'client_id' => env('WHMCS_CLIENT_ID'),
        'client_secret' => env('WHMCS_CLIENT_SECRET'),
        'api_username' => env('WHMCS_API_USERNAME'),
        'api_password' => env('WHMCS_API_PASSWORD'),
        'group_id' => env('WHMCS_PRODUCT_GROUP_ID'),
        'config_url' => env('WHMCS_CONFIG_URL'),
        'api_endpoint' => env('WHMCS_API_ENDPOINT'),
        'redirect' => env('WHMCS_REDIRECT_URI'),
    ],
];
