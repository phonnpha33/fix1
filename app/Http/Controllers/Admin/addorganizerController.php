<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addorganizerController extends Controller
{
    public function showaddorganizer(){
        return view('admin.addorganizer.addorganizer');
    }
}
