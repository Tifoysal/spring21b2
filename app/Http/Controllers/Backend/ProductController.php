<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        return view('backend.contents.product.list');
    }

    public function createForm()
    {
        return view('backend.contents.product.create');
    }

    public function create(Request $request)
    {
    Product::create([
       'name'=>$request->product_name,
        'price'=>$request->product_price,
        'category_id'=>$request->category_id
    ]);

    return redirect()->route('product.list');
    }
}

