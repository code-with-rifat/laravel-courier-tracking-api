<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\\CourierTrackingApiController;

echo "========================================\n";
echo " Laravel Logistics & Parcel Courier Tracker CLI Engine\n";
echo "========================================\n\n";

$controller = new CourierTrackingApiController();
$status = $controller->status();

echo "Service: " . $status['service'] . "\n";
echo "Version: " . $status['version'] . "\n";
echo "Status:  " . $status['status'] . "\n\n";
echo "System Ready.\n";