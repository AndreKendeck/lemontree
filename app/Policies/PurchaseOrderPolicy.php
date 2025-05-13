<?php

namespace App\Policies;

use App\Enums\PurchaseOrderType;
use App\Enums\RoleType;
use App\Models\PurchaseOrder;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PurchaseOrderPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return in_array($user->role, RoleType::getAdminRoles());
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, PurchaseOrder $purchaseOrder): bool
    {
        if ($user->role === RoleType::SALES_ASSOCIATE) {
            return $purchaseOrder->type === PurchaseOrderType::SUPPLIER;
        }
        return in_array($user->role, RoleType::getAdminRoles());
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return in_array($user->role, RoleType::getAdminRoles());
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, PurchaseOrder $purchaseOrder): bool
    {
        return in_array($user->role, RoleType::getAdminRoles());
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PurchaseOrder $purchaseOrder): bool
    {
        return $user->role === RoleType::SYSTEM_ADMINISTRATOR;
    }
}
