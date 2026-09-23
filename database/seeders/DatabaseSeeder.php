<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        \App\Models\Product::factory(50)->create();
        $this->call(SupplierSeeder::class);
    }
}