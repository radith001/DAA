<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            ['name' => 'Adidas', 'price' => 1000, 'category' => 'sepatu'],
            ['name' => 'Nike', 'price' => 999, 'category' => 'sepatu'],
            ['name' => 'Levis', 'price' => 500, 'category' => 'celana'],
            ['name' => 'Uniqlo', 'price' => 100, 'category' => 'baju'],
        ]);
    }
}
