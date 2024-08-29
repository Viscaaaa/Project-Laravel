<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // DB::table('products')->insert([
        //     'name' => Str::random(10),
        //     'description' => Str::random(10),
        //     'price' => rand(1, 10)
        // ]);


        // using eloquent
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description for product 1',
                'price' => 19.99,
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for product 2',
                'price' => 29.99,
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description for product 3',
                'price' => 39.99,
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        foreach ($products as $product) {
            Products::create($product);
        }
    }
}
