<?php

namespace App\Models;

use App\Enums\ClientType;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;

    protected function casts()
    {
        return [
            'type' => ClientType::class,
            'primary_sales_contact' => AsArrayObject::class,
            'primary_logistics_contact' => AsArrayObject::class
        ];
    }

    public function purchaseOrder(): HasMany
    {
        return $this->hasMany(PurchaseOrder::class)->latest();
    }
}
