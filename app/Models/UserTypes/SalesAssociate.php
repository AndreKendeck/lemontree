<?php

namespace App\Models\UserTypes;

use App\Enums\RoleType;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class SalesAssociate extends User
{
    protected $table = 'users';

    protected static function booted()
    {
        parent::booted();
        static::addGlobalScope('sales_associate_role', function (Builder $user) {
            $user->where('role', '=', RoleType::SALES_ASSOCIATE->value);
        });
    }
}
