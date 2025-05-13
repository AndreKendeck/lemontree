<?php

namespace App\Traits;

use App\Models\PurchaseOrder;

trait ManagesPurchaseOrders
{
    public function purchaseOrders()
    {
        return $this->hasMany(PurchaseOrder::class, 'user_id')->latest();
    }
}
