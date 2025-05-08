<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class ProductPrice extends Model
{
    /** @use HasFactory<\Database\Factories\ProductPriceFactory> */
    use HasFactory;

    protected $appends = ['display_price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function displayPrice(): Attribute
    {
        return new Attribute(
            get: function ($value) {
                return Number::currency($this->price, in: 'ZAR');
            }
        );
    }

    public function price(): Attribute
    {
        return new Attribute(
            set: function ($value) {
                $value *= $value;
                return $value;
            },
            get: fn($value) => ($value / 100)
        );
    }
}
