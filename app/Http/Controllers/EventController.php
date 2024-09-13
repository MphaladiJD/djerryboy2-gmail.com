<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
Use App\Models\Event;
Use App\Models\Booking;


use Illuminate\Support\Facades\Validator;


class EventController extends Controller
{
    public function index()
    {
        $events =Event::all();
        return view('events.index', compact('events'));
    }
         // Show event details
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }
    
    public function create()
    {
        return view('events.create');
    }
    public function store(Request $request)
    {

        $validator= validator::make($request->all(),
        ['name'=>'required|string|max:255','description'=>'required|string','location'=>'required|string|max:255',
        'date'=>'required|date','time'=>'required|date_format:H:i','max_attendees'=>'required|integer|min:1',]);
       if ($validator->fails())
       {
        return redirect()->route('events.create')
        ->withErrors($validator)
        ->withInput();
       }
        Event::create($request->all());
        return redirect()->route('events.index')
        ->with('success','Event created successfully.');
    }
    public function edit(Event $event)
    {
        
        return view('events.edit',
        compact('event'));
    }
    public function update(Request $request,Event $event)
    {
        $validator= validator::make($request->all(),
        ['name'=>'required|string|max:255','description'=>'required|string','location'=>'required|string|max:255',
        'date'=>'required|date','time'=>'required|date_format:H:i','max_attendees'=>'required|integer|min:1',]);
       if ($validator->fails())
       {
        return redirect()->route('events.edit',$events->id)
        ->withErrors($validator)
        ->withInput();
       }
        $event->update($request->all());
        return redirect()->route('events.index')
        ->with('success','Event created successfully.');

    }
    public function destroy($id)
    {
        $event->delete();
        return redirect()->route('events.index')
        ->with('success','Event deleted successfully.');


    }
    

}
