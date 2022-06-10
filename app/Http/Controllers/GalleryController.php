<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    
    public function index()
    {
        $galleries=Gallery::all();
        // dd($galleries);
        return view('admin.gallery',compact('galleries'));
    }
    public function store(Request $request)
    {
        $validations=[
            'name'=>'required|max:255',
            'description'=>'required|max:255|min:10',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ];
        $data=$request->validate($validations);
        $data['image']=$request->file('image')->store('gallery','public');
        $gallery=Gallery::create($data);
        return response([
            'data'=>$gallery,
            'message'=>'Picture Added Successfully',
            'status'=>'success'
        ],201);
    }
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return response([
            'data'=>$gallery,
            'message'=>'Picture Deleted Successfully',
            'status'=>'success'
        ],200);
    }
    
    public function update(Gallery $gallery,Request $request)
    {
        $validations=[
            'name'=>'required|max:255',
            'description'=>'required|max:255|min:10',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ];
        $data=$request->validate($validations);
        if($request->file('image'))
            $data['image']=$request->file('image')->store('gallery','public');
        $gallery->update($data);
        return response([
            'data'=>$gallery,
            'message'=>'Picture Updated Successfully',
            'status'=>'success'
        ],200);
    }
}
