<?php
namespace App\Services;

class ParcelCheckpointTracker {
    public function getTimeline(string $trackingNumber): array {
        return [
            ['time' => '2026-08-20 09:30', 'location' => 'Dhaka Sorting Hub', 'status' => 'Scanned at departure'],
            ['time' => '2026-08-21 14:15', 'location' => 'Chittagong Distribution Center', 'status' => 'Received at facility'],
            ['time' => '2026-08-22 08:45', 'location' => 'Agrabad Delivery Hub', 'status' => 'Out for delivery with rider']
        ];
    }
}