<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        $products = Product::where('category_id', $id)->get();
        $categories = Category::all();

        return view('product', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}

