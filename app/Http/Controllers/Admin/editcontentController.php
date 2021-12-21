<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class editcontentController extends Controller
{
    public function showeditcontent(){
        return view('admin.editcontent.editcontent');
    }
}
