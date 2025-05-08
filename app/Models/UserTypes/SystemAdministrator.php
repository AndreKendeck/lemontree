<?php

namespace App\Models\UserTypes;

use App\Enums\RoleType;
use App\Models\User;
use App\Traits\ManagesPurchaseOrders;
use Illuminate\Database\Eloquent\Builder;

class SystemAdministrator extends User
{
    use ManagesPurchaseOrders;
    
    protected $table = 'users';

    protected static function booted()
    {
        parent::booted();
        static::addGlobalScope('system_administrator_role', function (Builder $user) {
            $user->where('role', '=', RoleType::SYSTEM_ADMINISTRATOR->value);
        });
    }
}
