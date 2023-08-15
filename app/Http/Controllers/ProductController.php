<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {       
        $products = Product::get();
        return view('back.products.index',compact('products'));
    }

    public function create()
    {
        $cats = Category::get();
        return view('back.products.create',compact('cats'));
    }

    public function store(Request $request)
    {
        Product::create([
            'name'         => $request->name ,
            'price'        => $request->price ,
            'category_id'  => $request->category_id 
        ]);
        session()->flash('success','Product Created Successfuly.');
        return redirect()->back();
    }
}
