<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addproductController extends Controller
{
    public function showaddproduct(){
        return view('admin.addproduct.addproduct');
    }
    public function create(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpeg,bmp,jpg,png,gif|file|max:10000',
      
        ],
        [
            'name.required' => 'กรุณาป้อนชื่อสินค้าก่อน',
            'description.required' => 'กรุณาป้อนรายละเอียดสินค้าก่อน',
            'category.required' => 'กรุณาป้อนประเภทสินค้าก่อน',
            'price.required' => 'กรุณาป้อนราคาสินค้าก่อน',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลข',
            'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,bmp,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max' => 'อัพโหลดขนาดภาพไม่เกิน 10 MB ',

        ]
    );
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        // $product->category_id = $request->category ;

        if($request->hasFile('image')){
            $filename =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension() ; 
            $request->file('image')->move(public_path().'/admin/images/',$filename);
             Image::make(public_path().'/admin/images/'.$filename);
             $product->image = $filename;


        }else{
            $product->image = 'nopic.png';
        }

        $product->save();
        return redirect()->route('product');
}
}