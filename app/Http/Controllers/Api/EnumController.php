<?php

namespace App\Http\Controllers\Api;

use App\Enums\ClientType;
use App\Enums\PurchaseOrderStatus;
use App\Enums\PurchaseOrderType;
use App\Enums\RoleType;

class EnumController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $type)
    {
        return response()->json(
            match ($type) {
                'client' => ClientType::cases(),
                'purchase_order' => PurchaseOrderType::cases(),
                'purchase_order_status' => PurchaseOrderStatus::cases(),
                'role' => RoleType::cases()
            }
        );
    }
}
