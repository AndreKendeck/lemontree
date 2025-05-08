<?php

namespace App\Enums;

use JsonSerializable;

enum RoleType: string implements JsonSerializable
{
    case SYSTEM_ADMINISTRATOR = 'system_administrator';
    case PURCHASE_MANAGER = 'purchase_manager';
    case SALES_ASSOCIATE = 'sales_associate';

    public function getLabel(): string
    {
        return match ($this) {
            self::SYSTEM_ADMINISTRATOR => 'System Administrator',
            self::PURCHASE_MANAGER => 'Purchase Manager',
            self::SALES_ASSOCIATE => 'Field Sales Associate',
        };
    }

    public function getDescription(): string
    {
        return match ($this) {
            self::SYSTEM_ADMINISTRATOR => 'A backoffice user that is able to view and manage all aspects of the system',
            self::PURCHASE_MANAGER => 'Is able to create new Purchase Orders in line with Distributor requests, and issue Purchase Orders out to Suppliers',
            self::SALES_ASSOCIATE => 'Is only able to confirm the quantities and schedule dates provided by the Suppliers. Cannot create POs.',
        };
    }

    public function jsonSerialize(): string
    {
        return json_encode([
            'value' => $this->value,
            'label' => $this->getLabel(),
            'description' => $this->getDescription(),
        ]);
    }
}
