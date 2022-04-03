<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events=Event::all();
        return view('admin.events',compact('events'));
    }
    public function store(Request $request)
    {
        $data=$request->validate([
            'title' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'venue' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);
        $event=Event::create($data);
        return response([
            'status'=>'success',
            'message'=>'Event created successfully',
            'data'=>$event
        ],200);
    }
    public function update(Request $request,$id)
    {
        $data=$request->validate([
            'title' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'venue' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);
        $event=Event::find($id);
        $event->update($data);
        return response([
            'status'=>'success',
            'message'=>'Event updated successfully',
            'data'=>$event
        ],200);
    }
    public function destroy($id)
    {
        $event=Event::find($id);
        $event->delete();
        return response([
            'status'=>'success',
            'message'=>'Event deleted successfully',
            'data'=>$event
        ],200);
    }

}
