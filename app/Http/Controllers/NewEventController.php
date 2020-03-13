<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventcalendar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewEventController extends Controller
{
    public function show1()
    {

         $users = DB::select("SELECT * FROM eventcalendars WHERE type='กิจกรรม'");
        return view('New-teacher.index-event', compact('users'));

    }
}
