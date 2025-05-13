<?php

namespace App\Models;

use App\Casts\Money;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class ProductPrice extends Model
{
    /** @use HasFactory<\Database\Factories\ProductPriceFactory> */
    use HasFactory;

    protected function casts()
    {
        return [
            'price' => Money::class
        ];
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
