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

         $users = DB::select("select * FROM eventcalendars WHERE  type='ข่าวนัดหมาย' and term='1/63' GROUP by title");
         $users2 = DB::select("select * FROM eventcalendars WHERE  type='ข่าวนัดหมาย' and term='2/63' GROUP by title");

        return view('New-teacher.index', compact('users','users2'));

    }
    public function show()
    {
        $users = DB::select("select * FROM eventcalendars WHERE  type='อบรม' and term='1/63' GROUP by title");
        $users2 = DB::select("select * FROM eventcalendars WHERE  type='อบรม' and term='2/63' GROUP by title");

       return view('New-teacher.index-course', compact('users','users2'));



    }
    public function show1()
    {

        $users = DB::select("select * FROM eventcalendars WHERE  type='กิจกรรม' and term='1/63' GROUP by title");
        $users2 = DB::select("select * FROM eventcalendars WHERE  type='กิจกรรม' and term='2/63' GROUP by title");

       return view('New-teacher.index-event', compact('users','users2'));


    }
    public function show2($id)
    {


         $users = DB::select("select * FROM eventcalendars e , image i  WHERE  e.id='$id' and i.id='$id'  ");
         $users1 = DB::select("select * FROM eventcalendars e , image i WHERE e.id='$id' and i.id='$id' GROUP BY e.title");

        return view('New-teacher.detail_app', compact('users','users1'));

    }

    public function show3($id)
    {


         $users = DB::select("select * FROM eventcalendars e , image i  WHERE  e.id='$id' and i.id='$id' GROUP BY e.title  ");
         $users1 = DB::select("select * FROM eventcalendars e , image i WHERE e.id='$id' and i.id='$id' GROUP BY e.title");

        return view('New-teacher.detail_course', compact('users','users1'));

    }
    // public function show3($id)
    // {


    //      $users = DB::select("SELECT * FROM eventcalendars WHERE  id='$id'");

    //     return view('New-teacher.detail_course', compact('users'));

    // }
    // public function show4($id)
    // {


    //      $users = DB::select("SELECT * FROM eventcalendars WHERE  id='$id'");

    //     return view('New-teacher.detail_event', compact('users'));

    // }
}
