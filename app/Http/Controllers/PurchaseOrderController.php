<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchaseOrderRequest;
use App\Http\Requests\UpdatePurchaseOrderRequest;
use App\Models\PurchaseOrder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PurchaseOrderController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PurchaseOrder::with([
            'products' => function (BelongsToMany $products) {
                $products->withPivot([
                    'price',
                    'quantity',
                    'delivery_date'
                ]);
            }
        ])->paginate();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseOrderRequest $request)
    {
        return response()->json(
            PurchaseOrder::factory()->create(),
            201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(PurchaseOrder $purchaseOrder)
    {
        return response()->json($purchaseOrder);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PurchaseOrder $purchaseOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchaseOrderRequest $request, PurchaseOrder $purchaseOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseOrder $purchaseOrder)
    {
        //
    }
}
