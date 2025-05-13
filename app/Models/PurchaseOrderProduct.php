<?php

namespace App\Models;

use App\Casts\Money;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PurchaseOrderProduct extends Pivot
{
    protected $with = [
        'total',
    ];

    protected function casts()
    {
        return [
            'price' => Money::class
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function purchaseOrder(): BelongsTo
    {
        return $this->belongsTo(PurchaseOrder::class);
    }

    public function total(): Attribute
    {
        return new Attribute(
            get: fn() => (($this->price * 100) * $this->quantity) / 100
        );
    }
}
