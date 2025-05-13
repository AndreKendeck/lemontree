<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\StorePurchaseOrderProductRequest;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;

class PurchaseOrderProductController
{
    public function index(int $purchaseOrderId)
    {
        // return all products in that purchase order
    }

    public function store(int|string $purchaseOrderId, StorePurchaseOrderProductRequest $request)
    {
        // store the product in the purchase order
    }
}
