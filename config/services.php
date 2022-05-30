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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '577366970571009',
        'client_secret' => '8fcc65b347c43dc41e2c42b673fc2542',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],
    'google' => [
        'client_id' => '520971069651-6ggf78haqmsf3ktqrusk469aitacnihn.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

    'github' => [
        'client_id' => 'cdd374aacb435108ec19',
        'client_secret' => 'f60f84e3b7c0c03fd10144b9a143fda2b6561475',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

];
