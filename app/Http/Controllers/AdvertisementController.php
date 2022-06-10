<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;

class AdvertisementController extends Controller
{
    
    public function index()
    {
        $advertisements=Advertisement::all();
        return view('admin.advertisement',compact('advertisements'));
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
        $data['image']=$request->file('image')->store('advertisement','public');
        $advertisement=Advertisement::create($data);
        return response([
            'data'=>$advertisement,
            'message'=>'Advertisement Added Successfully',
            'status'=>'success'
        ],201);
    }
    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();
        return response([
            'data'=>$advertisement,
            'message'=>'Advertisement Deleted Successfully',
            'status'=>'success'
        ],200);
    }
    
    public function update(Advertisement $advertisement,Request $request)
    {
        $validations=[
            'date'=>'required|date',
            'title'=>'required|max:255',
            'details'=>'required|max:255|min:10',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ];
        $data=$request->validate($validations);
        if($request->file('image'))
            $data['image']=$request->file('image')->store('advertisement','public');
        $advertisement->update($data);
        return response([
            'data'=>$advertisement,
            'message'=>'Advertisement Updated Successfully',
            'status'=>'success'
        ],200);
    }
}
