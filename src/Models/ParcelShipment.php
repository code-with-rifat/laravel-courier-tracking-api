<?php
namespace App\Models;

class ParcelShipment {
    public const STATUS_IN_TRANSIT = 'in_transit';
    public const STATUS_OUT_FOR_DELIVERY = 'out_for_delivery';
    public const STATUS_DELIVERED = 'delivered';

    public function __construct(
        public string $trackingNumber,
        public string $carrierName,
        public string $senderCity,
        public string $recipientAddress,
        public float $weightKg,
        public string $currentStatus = self::STATUS_IN_TRANSIT
    ) {}
}