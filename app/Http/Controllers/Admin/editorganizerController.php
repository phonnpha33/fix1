<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class editorganizerController extends Controller
{
    public function showeditorganizer(){
        return view('admin.editorganizer.editorganizer');
    }
}
