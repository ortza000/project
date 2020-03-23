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

         $users = DB::select("select * FROM image i,eventcalendars ec WHERE ec.id=i.id and ec.type='ข่าวนัดหมาย'
         ORDER BY `ec`.`start` DESC");

        return view('New-teacher.index', compact('users'));

    }
    public function show()
    {

         $users = DB::select("select * FROM image i,eventcalendars ec WHERE ec.id=i.id and ec.type='อบรม' ORDER BY `ec`.`start` DESC");
        return view('New-teacher.index-course', compact('users'));

    }
    public function show1()
    {

         $users = DB::select("select * FROM image i,eventcalendars ec WHERE ec.id=i.id and ec.type='กิจกรรม' ORDER BY `ec`.`start` DESC");
        return view('New-teacher.index-event', compact('users'));

    }
    public function show2($id)
    {


         $users = DB::select("SELECT * FROM eventcalendars WHERE  id='$id'");

        return view('New-teacher.detail_app', compact('users'));

    }
    public function show3($id)
    {


         $users = DB::select("SELECT * FROM eventcalendars WHERE  id='$id'");

        return view('New-teacher.detail_course', compact('users'));

    }
    public function show4($id)
    {


         $users = DB::select("SELECT * FROM eventcalendars WHERE  id='$id'");

        return view('New-teacher.detail_event', compact('users'));

    }
}
