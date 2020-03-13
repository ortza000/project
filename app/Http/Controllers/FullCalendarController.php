<?php

namespace App\Http\Controllers;
use App\fastcourse;
use Illuminate\Http\Request;

class FullCalendarController extends Controller
{
    public function index()
    {

         $fastEvents = fastcourse::all();
        return view('fullcalendar.master');
    }
}
