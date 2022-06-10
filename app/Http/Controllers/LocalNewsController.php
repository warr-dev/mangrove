<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalNews;

class LocalNewsController extends Controller
{
    
    public function index()
    {
        $news = LocalNews::all();
        return view('admin.localnews',compact('news'));
    }

    public function store(Request $request)
    {
        $validations=[
            'date'=>'required|date',
            'title'=>'required|max:255',
            'details'=>'required|max:255|min:10',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ];
        $data=$request->validate($validations);
        $data['image']=$request->file('image')->store('localnews','public');
        $localnews=LocalNews::create($data);
        return response([
            'data'=>$localnews,
            'message'=>'News Added Successfully',
            'status'=>'success'
        ],201);
    }
    public function destroy(LocalNews $localnews)
    {
        $localnews->delete();
        return response([
            'data'=>$localnews,
            'message'=>'News Deleted Successfully',
            'status'=>'success'
        ],200);
    }

    public function update(LocalNews $localnews,Request $request)
    {
        $validations=[
            'date'=>'required|date',
            'title'=>'required|max:255',
            'details'=>'required|max:255|min:10',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ];
        $data=$request->validate($validations);
        if($request->file('image'))
            $data['image']=$request->file('image')->store('localnews','public');
        $localnews->update($data);
        return response([
            'data'=>$localnews,
            'message'=>'News Updated Successfully',
            'status'=>'success'
        ],200);
    }
}
