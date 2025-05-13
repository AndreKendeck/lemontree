<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \App\Enums\ClientType $type
 * @property string $business_name
 * @property string $country
 * @property string $vat_number
 * @property string $primary_sales_contact
 * @property string $secondary_sales_contact
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PurchaseOrder> $purchaseOrder
 * @property-read int|null $purchase_order_count
 * @method static \Database\Factories\ClientFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereBusinessName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client wherePrimarySalesContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereSecondarySalesContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereVatNumber($value)
 */
	class Client extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $code
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProductPrice|null $currentPrice
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductPrice> $prices
 * @property-read int|null $prices_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PurchaseOrder> $purchaseOrders
 * @property-read int|null $purchase_orders_count
 * @method static \Database\Factories\ProductFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property mixed $price
 * @property int $year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product|null $product
 * @method static \Database\Factories\ProductPriceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPrice whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPrice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPrice whereYear($value)
 */
	class ProductPrice extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $client_id
 * @property \App\Enums\PurchaseOrderStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \App\Enums\PurchaseOrderType $type
 * @property-read \App\Models\PurchaseOrderProduct|null $pivot
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\PurchaseOrderFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrder whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrder whereUserId($value)
 */
	class PurchaseOrder extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property mixed $price
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\PurchaseOrder|null $purchaseOrder
 * @property-read mixed $total
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrderProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrderProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseOrderProduct query()
 */
	class PurchaseOrderProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \App\Enums\RoleType $role
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models\UserTypes{
/**
 * 
 *
 * @property int $id
 * @property \App\Enums\RoleType $role
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PurchaseOrder> $purchaseOrders
 * @property-read int|null $purchase_orders_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseManager whereUpdatedAt($value)
 */
	class PurchaseManager extends \Eloquent {}
}

namespace App\Models\UserTypes{
/**
 * 
 *
 * @property int $id
 * @property \App\Enums\RoleType $role
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalesAssociate whereUpdatedAt($value)
 */
	class SalesAssociate extends \Eloquent {}
}

namespace App\Models\UserTypes{
/**
 * 
 *
 * @property int $id
 * @property \App\Enums\RoleType $role
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PurchaseOrder> $purchaseOrders
 * @property-read int|null $purchase_orders_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemAdministrator whereUpdatedAt($value)
 */
	class SystemAdministrator extends \Eloquent {}
}

