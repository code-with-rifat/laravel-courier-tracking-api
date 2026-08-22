<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Services\\CourierTrackingApiService;

class CourierTrackingApiServiceTest extends TestCase
{
    private CourierTrackingApiService $service;

    protected function setUp(): void
    {
        $this->service = new CourierTrackingApiService();
    }

    public function testHealthCheckReturnsTrue(): void
    {
        $this->assertTrue($this->service->healthCheck());
    }

    public function testProcessReturnsSuccessStatus(): void
    {
        $input = ['test_key' => 'test_value'];
        $result = $this->service->process($input);

        $this->assertIsArray($result);
        $this->assertEquals('success', $result['status']);
        $this->assertEquals($input, $result['data']);
    }
}