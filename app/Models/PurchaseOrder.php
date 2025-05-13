<?php

namespace App\Models;

use App\Enums\PurchaseOrderStatus;
use App\Enums\PurchaseOrderType;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class PurchaseOrder extends Model
{
    /** @use HasFactory<\Database\Factories\PurchaseOrderFactory> */
    use HasFactory;

    protected $appends = [
        'name',
    ];

    protected function casts()
    {
        return [
            'type' => PurchaseOrderType::class,
            'status' => PurchaseOrderStatus::class,
        ];
    }

    public function name(): Attribute
    {
        return new Attribute(
            get: fn() => $this->type->value . $this->created_at->format('Ymd') . $this->id
        );
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'purchase_order_products')
            ->using(PurchaseOrderProduct::class)
            ->withPivotValue([
                'quantity',
                'price'
            ]);
    }

    public function addProduct(Product $product, float $quantity, DateTimeInterface $deliveryDate)
    {
        $this->products()->attach($product, [
            'quantity' => $quantity,
            'price' => $product->currentPrice->price,
            'delivery_date' => $deliveryDate->format('Y-m-d')
        ]);
    }
}
