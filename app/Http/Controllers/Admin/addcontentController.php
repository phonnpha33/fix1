<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addcontentController extends Controller
{
    public function showaddcontents(){
        return view('admin.addcontent.addcontent');
    }
}
