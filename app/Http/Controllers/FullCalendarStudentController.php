<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
use App\Event;

class FullCalendarStudentController extends Controller
{
    public function index()
    {
         $fastEvents = Project::all();
         $fastProjects = Event::all();
        return view('fullcalendar1.master1',['fastEvents' => $fastEvents],['fastProjects' => $fastProjects]);
    }
}
