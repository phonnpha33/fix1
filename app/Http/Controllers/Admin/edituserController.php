<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class edituserController extends Controller
{
    public function showedituser(){
        return view('admin.edituser.edituser');
    }
}
