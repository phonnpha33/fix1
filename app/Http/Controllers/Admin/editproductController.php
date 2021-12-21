<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class editproductController extends Controller
{
    public function showeditproduct(){
        return view('admin.editproduct.editproduct');
    }
}
