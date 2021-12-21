<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class producttypeController extends Controller
{
    public function showproducttype(){
        return view('admin.producttype.producttype');
    }
}
