<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class CategoryController extends Controller
{
    public function index()
    {
        $cats = Category::orderBy('created_at','DESC')->get();
        return view('back.categories.index',compact('cats'));
    }

    public function create()
    {
        return view('back.categories.create');
    }

    public function store(Request $request)
    {
       $file_name = $request->photo->getClientOriginalName();   
        Category::create([
            'name'  => $request->name ,
            'photo' =>$file_name
        ]);
        $request->photo->move(public_path('cats/'),$file_name);
        return redirect(url('categories'));
    }

    public function show_products($id)
    {
       $products =  Product::where('category_id',$id)->get();
       $cat = Category::find($id);
       return view('back.categories.show_products',compact('products','cat'));
    }


    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->products()->delete();    // Child Raws
        $cat->delete();              // Parent Row
        return redirect(url('categories'));
    }
}
