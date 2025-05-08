<?php

namespace App\Models\UserTypes;

use App\Enums\RoleType;
use App\Models\User;
use App\Traits\ManagesPurchaseOrders;
use Illuminate\Database\Eloquent\Builder;

class PurchaseManager extends User
{
    use ManagesPurchaseOrders;

    protected $table = 'users';

    protected static function booted()
    {
        parent::booted();
        static::addGlobalScope('purchase_manager_role', function (Builder $user) {
            $user->where('role', '=', RoleType::PURCHASE_MANAGER->value);
        });
    }
}
