<?php

namespace App\Enums;

use JsonSerializable;

enum PurchaseOrderStatus: string implements JsonSerializable
{
    case NEW = 'new';
    case ACCEPTED_BY_SUPPLIER = 'accepted_by_supplier';
    case IN_DELIVERY = 'in_delivery';
    case DELIVERED = 'delivered';
    case REJECTED_BY_SUPPLIER = 'rejected_by_supplier';
    case REJECTED_BY_DISTRIBUTOR = 'rejected_by_distributor';
    case CANCELED = 'canceled';


    public function getNextAvailableStatuses(): array
    {
        return match ($this) {
            self::NEW => [self::CANCELED, self::ACCEPTED_BY_SUPPLIER, self::REJECTED_BY_SUPPLIER],
            self::ACCEPTED_BY_SUPPLIER => [self::CANCELED, self::IN_DELIVERY],
            self::IN_DELIVERY => [self::CANCELED, self::DELIVERED],
            self::DELIVERED => [self::CANCELED, self::REJECTED_BY_DISTRIBUTOR],
            self::REJECTED_BY_SUPPLIER => [self::CANCELED],
            self::REJECTED_BY_DISTRIBUTOR => [self::CANCELED],
            self::CANCELED => [self::CANCELED]
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::NEW => 'New',
            self::ACCEPTED_BY_SUPPLIER => 'Accepted by Supplier',
            self::IN_DELIVERY => 'In Delivery',
            self::DELIVERED => 'Delivered',
            self::REJECTED_BY_SUPPLIER => 'Rejected by Supplier',
            self::REJECTED_BY_DISTRIBUTOR => 'Rejected by Distributor',
            self::CANCELED => 'Canceled',
        };
    }

    public function jsonSerialize(): mixed
    {
        return json_encode([
            'label' => $this->getLabel(),
            'value' => $this->value
        ]);
    }
}
