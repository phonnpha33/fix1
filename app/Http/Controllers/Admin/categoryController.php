<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
//use Faker\Core\File as CoreFile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use Image;
use File;

class categoryController extends Controller
{
    public function showcategory()
    {
        $category = Category::all();
        return view('admin.category.category', compact('category'));
        // dd($request);
    }
    public function create(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        $category->name = $request->name;

        $category->save();
        return redirect()->route('category');
    }

    public function edit($id)
    {
        $editcategory = Category::find($id);
        return view('admin.category.edit', compact('editcategory'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        
        $category->title = $request->title;
        $category->name = $request->name;

        $category->save();
        return redirect()->route('category');
    }

    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }

}
