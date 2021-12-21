<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class editbackgroundController extends Controller
{
    public function showeditbackground(){
        return view('admin.editbackground.editbackground');
    }
}
