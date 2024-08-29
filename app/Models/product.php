<?php

namespace App\Models;



class Product
{
    private static $product =  [
        [
            'name' => 'Smartphone',
            'price' => 299.99,
            'category' => 'Electronics'
        ],
        [
            'name' => 'Laptop',
            'price' => 799.99,
            'category' => 'Electronics'
        ],
        [
            'name' => 'Coffee Maker',
            'price' => 49.99,
            'category' => 'Home Appliances'
        ],

    ];
    public static function all()
    {
        return self::$product;
    }
}
