<?php

namespace App\Http\Controllers;
use App\fastcourse;
use Illuminate\Http\Request;

class FullCalendar1Controller extends Controller
{
    public function index()
    {

         $fastEvents = fastcourse::all();
        return view('fullcalendar-student.master1');
    }
}
