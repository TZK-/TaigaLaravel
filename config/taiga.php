<?php

return [
    'api' => env('TAIGA_API', 'https://api.taiga.io/api/v1/'),
    'token' => env('TAIGA_TOKEN'),
    'headers' => [
        'language' => env('TAIGA_LANGUAGE', 'en'),
    ],
];
