<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventcalendar;
use Event;

class EventcalendarController extends Controller
{
    public function loadEvents()
    {
        $events = Eventcalendar::all();

        return response()->json($events);
    }

    public function store(Request $request)
    {
        Eventcalendar::create($request->all());

        return response()->json(true);
    }


    public function update(Request $request)
    {
        $event = Eventcalendar::where('id', $request->id)->first();

        $event->fill($request->all());

        $event->save();

        return response()->json(true);
    }

    public function destroy(Request $request)
    {
      // dd($id);
      Eventcalendar::where('id',$request->id)->delete();
      return response()->json(true);

    }
}
