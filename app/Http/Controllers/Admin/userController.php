<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
//use Faker\Core\File as CoreFile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use Image;
use File;

class userController extends Controller
{
    public function showuser()
    {
        $user = User::all();
        return view('admin.user.user', compact('user'));
        // dd($request);
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }

}
