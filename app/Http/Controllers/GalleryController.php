<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    
    public function index()
    {
        $galleries=Gallery::all();
        return view('admin.gallery',compact('galleries'));
    }
    public function store(Request $request)
    {
        $validations=[
            'name'=>'required',
            'description'=>'required',
            'image'=>'required',
        ];
        $data=$request->validate($validations);
        $gallery=Gallery::create($request->all());
        return redirect()->back();
    }
    public function destroy($id)
    {
        $gallery=Gallery::find($id);
        $gallery->delete();
        return redirect()->back();
    }
}
