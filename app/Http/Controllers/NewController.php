<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventcalendar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewController extends Controller
{

    public function index()
    {

         $users = DB::select("SELECT * FROM eventcalendars WHERE type='ข่าวนัดหมาย'");

        return view('New-teacher.index', compact('users'));

    }
    public function show()
    {

         $users = DB::select("SELECT * FROM eventcalendars WHERE type='อบรม'");
        return view('New-teacher.index-course', compact('users'));

    }
    public function show1()
    {

         $users = DB::select("SELECT * FROM eventcalendars WHERE type='กิจกรรม'");
        return view('New-teacher.index-event', compact('users'));

    }
}
