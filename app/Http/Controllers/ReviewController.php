<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validations=[
            'rating'=>'required|integer|between:1,5',
            'comment'=>'required|max:255',
            'attachments.*'=>'image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ];
        $data=$request->validate($validations);
        $data['user_id']=auth()->user()->id;
        $review=Review::create($data);
        if($request->file('attachments')){
            foreach($request->file('attachments') as $attachment){
                $review->attachments()->create([
                    'attachment'=>$attachment->store('attachments/'.$review->id,'public')
                ]);
            }
        }
        return response([
            'data'=>$review->with('attachments')->get(),
            'message'=>'Feedback submitted Successfully',
            'status'=>'success'
        ],201);
    }
}



