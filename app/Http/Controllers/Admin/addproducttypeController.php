<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addproducttypeController extends Controller
{
    public function showaddproducttype(){
        return view('admin.addproducttype.addproducttype');
    }
}
