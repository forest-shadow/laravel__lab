<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(4);
        $productsTotalCount = count(Product::all());

        return view('product.products')->with([
            'products' => $products,
            'productsTotalCount' => $productsTotalCount
        ]);
    }

    public function show(Product $product)
    {
        return view('product.product')->with([
            'product' => $product
        ]);
    }
}
