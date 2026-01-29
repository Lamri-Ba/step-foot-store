<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
        'name' => 'Night Runner',
        'price' => 39.99,
        'image' => 'shoes_1.png',
        'category' => 'Running',
    ]);

    Product::create([
        'name' => 'Urban Sneaker',
        'price' => 49.99,
        'image' => 'shoes_2.png',
        'category' => 'Casual',
    ]);
    }
}
