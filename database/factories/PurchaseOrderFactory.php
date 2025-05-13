<?php

namespace Database\Factories;

use App\Enums\ClientType;
use App\Enums\PurchaseOrderStatus;
use App\Enums\PurchaseOrderType;
use App\Models\Client;
use App\Models\Product;
use App\Models\PurchaseOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchaseOrder>
 */
class PurchaseOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $purchaseOrderType = fake()->randomElement(PurchaseOrderType::cases());
        return [
            'type' => fake()->randomElement(PurchaseOrderType::cases()),
            'client_id' => value(function () use ($purchaseOrderType) {
                return match ($purchaseOrderType) {
                    PurchaseOrderType::DISTRIBUTOR => Client::factory()->create(['type' => ClientType::DISTRIBUTOR])->id,
                    PurchaseOrderType::SUPPLIER => Client::factory()->create(['type' => ClientType::SUPPLIER])->id,
                };
            }),
            'status' => PurchaseOrderStatus::NEW,
            'created_at' => fake()->dateTimeBetween(['01/01/2023', '31/12/2025']),
        ];
    }

    public function configure()
    {
        $this->afterCreating(function (PurchaseOrder $purchaseOrder) {
            $products = Product::factory()
                ->createMany(3);
            $products->each(function (Product $product) use ($purchaseOrder) {
                $deliveryDate = fake()->dateTimeBetween($purchaseOrder->created_at->addWeek(), $purchaseOrder->created_at->addWeeks(24));
                $purchaseOrder->addProduct($product, fake()->randomFloat(2, 1, 50), $deliveryDate);
            });
        });
    }
}
