<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products=Product::with('productCategory')->get();
//        dd($products);
        return view('backend.contents.product.list',compact('products'));
    }

    public function createForm()
    {
        $categories=Category::all();
        return view('backend.contents.product.create',compact('categories'));
    }

    public function create(Request $request)
    {
//        dd($request->file('product_image')->getClientOriginalExtension());

        $file_name='';
        //step1: check request has file?
        if($request->hasFile('product_image'))
        {
            //file is valid or not
            $file=$request->file('product_image');
            if($file->isValid())
            {
                //generate unique file name
                $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

                //store image into local directory
                $file->storeAs('product',$file_name);
            }

        }

    Product::create([
       'name'=>$request->product_name,
        'price'=>$request->product_price,
        'category_id'=>$request->category_id,
        'image'=>$file_name
    ]);

    return redirect()->route('product.list')->with('jahid-message','Product Created Successfully.');
    }
}

