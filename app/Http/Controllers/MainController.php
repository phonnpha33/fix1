<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function product(){
        $product = Product::all();
        return view('welcome',compact('product'));
    }
}
