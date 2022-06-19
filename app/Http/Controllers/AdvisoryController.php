<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advisory;

class AdvisoryController extends Controller
{
    public function index()
    {
        $advisories=Advisory::all();
        return view('admin.advisory',compact('advisories'));
    }
    public function store(Request $request)
    {
        $validations=[
            'date'=>'required|date',
            'title'=>'required|max:255',
            'details'=>'required|max:2000|min:10',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ];
        $data=$request->validate($validations);
        $data['image']=$request->file('image')->store('advisory','public');
        $advisories=Advisory::create($data);
        return response([
            'data'=>$advisories,
            'message'=>'Advisory Added Successfully',
            'status'=>'success'
        ],201);
    }
    public function destroy(Advisory $advisory)
    {
        $advisory->delete();
        return response([
            'data'=>$advisory,
            'message'=>'Advisory Deleted Successfully',
            'status'=>'success'
        ],200);
    }
    
    public function update(Advisory $advisory,Request $request)
    {
        $validations=[
            'date'=>'required|date',
            'title'=>'required|max:255',
            'details'=>'required|max:255|min:10',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ];
        $data=$request->validate($validations);
        if($request->file('image'))
            $data['image']=$request->file('image')->store('advisory','public');
        $advisory->update($data);
        return response([
            'data'=>$advisory,
            'message'=>'Advisory Updated Successfully',
            'status'=>'success'
        ],200);
    }
}
