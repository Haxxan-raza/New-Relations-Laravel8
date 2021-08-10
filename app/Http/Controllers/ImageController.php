<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
function index()
{
    return view('images');
}
function store(Request $request)
{
    $request->validation=([
   'images' => 'required'
    ]);
    if($request->hasfile('images')) {
        $images = $request->file('images');
        foreach($images as $image) {
            $name = $image->getClientOriginalName();
                $path = $image->storeAs('uploads', $name, 'public');
                
                Image::create([
                    'name' => $name,
                    'path' => '/storage/'.$path
                  ]);
    }
}
return back()->with('success', 'Images uploaded successfully');
}
}
