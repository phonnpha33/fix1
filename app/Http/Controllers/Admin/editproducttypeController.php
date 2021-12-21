<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class editproducttypeController extends Controller
{
    public function showeditproducttype(){
        return view('admin.editproducttype.editproducttype');
    }
}
