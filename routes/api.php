<?php

/**
 * API Routes Definition for laravel-courier-tracking-api
 */

return [
    'GET /api/v1/health' => ['App\Controllers\ApiController', 'health'],
    'GET /api/v1/courier-tracking-api' => ['App\Controllers\\CourierTrackingApiController', 'index'],
    'POST /api/v1/courier-tracking-api' => ['App\Controllers\\CourierTrackingApiController', 'store'],
    'GET /api/v1/courier-tracking-api/{id}' => ['App\Controllers\\CourierTrackingApiController', 'show'],
    'DELETE /api/v1/courier-tracking-api/{id}' => ['App\Controllers\\CourierTrackingApiController', 'destroy']
];