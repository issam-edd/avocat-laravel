<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    function home() {
        return view("dashboard.lawyer.managments.calendar.home");
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $this->eventsToArray(Event::all());
    }

    public function eventsToArray($events){
        $eventsArray = [];
        foreach($events as $event){
            $data = [
                "title" => $event->title,
                "start" => $event->start_date,
                "end" => $event->end_date,
                "textColor" => "white"
            ];
            array_push($eventsArray,$data);
        }
        return response()->json($eventsArray);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.lawyer.managments.calendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Event::create([
            "title" => $request->title,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date
        ]);
        // return response()->json(['success'=>'added']);
        return to_route("lawyer.calendar.home")->withSuccess("Event added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
        return view('dashboard.lawyer.managments.calendar.show')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
        $event->update([
            "start_date" => $request->start,
            "end_date" => $request->end
        ]);
        return response()->json(['success'=>'updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
        $event->delete();
        return response()->json(['success'=>'deleted']);
    }
}
