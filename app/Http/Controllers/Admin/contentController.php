<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contentController extends Controller
{
    public function showadmin(){
        return view('admin.content.content');
    }


}
