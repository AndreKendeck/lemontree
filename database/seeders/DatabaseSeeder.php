<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->createMany(10);
        $this->call(ClientSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PurchaseOrderSeeder::class);
    }
}
