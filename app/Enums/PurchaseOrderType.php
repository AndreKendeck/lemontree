<?php

namespace App\Enums;

use JsonSerializable;

enum PurchaseOrderType: string implements JsonSerializable
{
    case SUPPLIER = 'POS';
    case DISTRIBUTOR = 'POD';

    public function getLabel(): string
    {
        return match ($this) {
            self::DISTRIBUTOR => 'Distributor',
            self::SUPPLIER => 'Supplier'
        };
    }

    public function jsonSerialize(): mixed
    {
        return [
            'label' => $this->getLabel(),
            'value' => $this->value
        ];
    }
}
