<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

class addcategoryController extends Controller
{
    public function showaddcategory(){
        return view('admin.category.addcategory');
    }
    public function create(Request $request){
        $category = new Category();
        $category->title = $request->title;
        $category->name = $request->name;

        $product->save();
        return redirect()->route('category');
}
}