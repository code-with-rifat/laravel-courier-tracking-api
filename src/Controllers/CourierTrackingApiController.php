<?php

namespace App\Controllers;

use App\Services\\CourierTrackingApiService;

class CourierTrackingApiController
{
    private CourierTrackingApiService $service;

    public function __construct()
    {
        $this->service = new CourierTrackingApiService();
    }

    public function handleRequest(array $request): array
    {
        if (empty($request)) {
            return [
                'code' => 400,
                'status' => 'error',
                'message' => 'Invalid or empty request payload'
            ];
        }

        $result = $this->service->process($request);

        return [
            'code' => 200,
            'status' => 'success',
            'response' => $result
        ];
    }

    public function status(): array
    {
        return [
            'service' => 'Laravel Logistics & Parcel Courier Tracker',
            'version' => '1.0.0',
            'status' => 'operational'
        ];
    }
}