<?php

namespace Database\Factories;

use App\Enums\ClientType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(ClientType::cases()),
            'business_name' => fake()->company(),
            'country' => fake()->country(),
            'vat_number' => fake()->numerify('### ### ###'),
            'primary_sales_contact' => [
                'name' => fake()->name(),
                'email' => fake()->safeEmail(),
                'telephone' => fake()->phoneNumber(),
            ],
            'primary_logistics_contact' => [
                'name' => fake()->name(),
                'email' => fake()->safeEmail(),
                'telephone' => fake()->phoneNumber(),
            ]
        ];
    }
}
