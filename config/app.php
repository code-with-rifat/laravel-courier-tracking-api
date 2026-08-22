<?php

return [
    'name' => 'laravel-courier-tracking-api',
    'env' => \['APP_ENV'] ?? 'production',
    'debug' => (bool)(\['APP_DEBUG'] ?? false),
    'url' => \['APP_URL'] ?? 'http://localhost:8000',
    'timezone' => 'UTC',
    'locale' => 'en'
];