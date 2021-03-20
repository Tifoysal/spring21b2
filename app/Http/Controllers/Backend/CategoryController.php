<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
       $categories=Category::all();
//       dd($categories);
        return view('backend.contents.category.list',compact('categories'));
    }

    public function create(Request $request)
    {

        Category::create([
           'name'=>$request->name,
           'description'=>$request->description
        ]);

        return redirect()->back();
    }
}
