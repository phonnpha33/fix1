<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Organizer;
use Illuminate\Http\Request;

class organizerController extends Controller
{
    public function showorganizer()
    {
        $organizer = Organizer::all();
        return view('admin.organizer.organizer', compact('organizer'));
        // dd($request);
    }
    public function create(Request $request)
    {

        $organizer = new Organizer();
        $organizer->name = $request->name;
        $organizer->description = $request->description;
        $organizer->price = $request->price;
        $organizer->category_id = $request->category;
        $organizer->image = $request->image;

        if ($request->hasFile('image')) {
            $filename =  Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filename);
            // Image::make(public_path() . '/admin/images/' . $filename);
            $organizer->image = $filename;
        } else {
            $organizer->image = 'NOPIC.jpg';
        }

        $organizer->save();
        return redirect()->route('organizer');
    }

    public function edit($id_user)
    {
        $editorganizer = Organizer::find($id_user);
        return view('admin.organizer.edit', compact('editorganizer'));
    }

    public function update(Request $request, $id)
    {
        $organizer = Organizer::find($id);
        
        $organizer->name = $request->name;
        $organizer->description = $request->description;
        $organizer->price = $request->price;
        $organizer->category_id = $request->category;
        $organizer->image = $request->image;
        
        if ($request->hasFile('image')) {
            if ($organizer->image != 'NOPIC.jpg') {
                File::delete(public_path() . '/admin/images/' . $organizer->image);
            }
            $filename =  Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filename);
            // Image::make(public_path() . '/admin/images/' . $filename);
            $organizer->image = $filename;
        }

        $organizer->save();
        return redirect()->route('organizer');
    }

    public function delete($id)
    {
        Organizer::find($id)->delete();
        return redirect()->back();
    }

}
