<?php

namespace App\Http\Controllers;

use App\Models\Products;


class ProductController extends Controller
{
    public function getProduct()
    {
        // mengambil data dari database
        $products = Products::all();

        // mengirim data ke bagian view
        return  view('pages.product', ['products' => $products]);
    }
}
