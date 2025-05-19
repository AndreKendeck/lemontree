<?php

namespace Database\Factories;

use App\Enums\PurchaseOrderType;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    const PRODUCTS = [
        'Oranges',
        'Lemons',
        'Grapefruit',
        'Limes'
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => Str::upper(Str::random(6)),
            'description' => sprintf(
                "%s %s - %s %s",
                fake()->city(),
                fake()->randomElement(self::PRODUCTS),
                fake()->randomElement(['Grade', 'Type']),
                fake()->randomLetter()
            )
        ];
    }

    public function configure()
    {
       return $this->afterCreating(function (Product $product) {
            ProductPrice::factory()
                ->count(3)
                ->for($product)
                ->sequence(fn(Sequence $sequence) => ['year' => now()->year - $sequence->index])
                ->create();
        });
    }
}
