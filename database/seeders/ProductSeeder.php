<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Laptop',
                'description' => 'Gaming laptop',
                'price' => 1200.00,
                'quantity' => 10,
                'category_id' => 1,
                'status' => 'Active'
            ],
            [
                'name' => 'T-Shirt',
                'description' => 'Cotton shirt',
                'price' => 20.50,
                'quantity' => 50,
                'category_id' => 2,
                'status' => 'Active'
            ],
            [
                'name' => 'Novel Book',
                'description' => 'Best-selling novel',
                'price' => 15.99,
                'quantity' => 25,
                'category_id' => 3,
                'status' => 'Inactive'
            ]
        ]);
    }
}
