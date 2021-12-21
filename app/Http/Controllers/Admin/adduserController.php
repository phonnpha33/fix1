<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adduserController extends Controller
{
    public function showadduser(){
        return view('admin.adduser.adduser');
    }
}
