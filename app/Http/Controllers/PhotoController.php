<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function gallery(){
        $photos = Photo::all();
        return view('gallery',compact('photos'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'photo' => ['required', 'image']
        ]);

        $path = $request->file('photo');
        $name = Str::uuid() . '_' . str_replace(' ', '_', $path->getClientOriginalName());
        $path->storeAs('public/Photo/', $name);
        Photo::create([
            'photo' => $name
        ]);
        return redirect('/gallery');
    }

    public function view($id){
        $photo = Photo::find($id);
        if(!$photo){
            abort(404);
        }
        return view('view-photo', compact('photo'));
    }

    public function delete($id){
        $photo = Photo::find($id);
        if(!$photo){
            abort(404);
        }
 
        if(Storage::exists('public/Photo/'. $photo->photo)){
            Storage::delete('public/Photo/'. $photo->photo);
        }
        $photo->delete();
        return redirect('/gallery');
    }
}
