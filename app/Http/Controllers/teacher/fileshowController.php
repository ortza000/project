<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class fileshowController extends Controller
{
    public function index()
    {



        $users = DB::select("SELECT * FROM files f , eventcalendars c WHERE f.id=c.id and c.type='อบรม' and c.term='1/63' GROUP BY c.title");
        $users1 = DB::select("SELECT * FROM files f , eventcalendars c WHERE f.id=c.id and c.type='อบรม' and c.term='2/63' GROUP BY c.title");
        $users2 = DB::select("SELECT * FROM files f , eventcalendars c WHERE f.id=c.id and c.type='กิจกรรม' and c.term='1/63' GROUP BY c.title");
        $users3 = DB::select("SELECT * FROM files f , eventcalendars c WHERE f.id=c.id and c.type='กิจกรรม' and c.term='2/63' GROUP BY c.title");
        // $users2 = DB::select("SELECT f.name , p.pro_name FROM files f , projectandevent p WHERE f.pro_id=p.pro_id");
        //  dd($users);

        // $users = DB::select("select s.std_name,s.std_card,s.std_year,s.std_phone,s.std_major,s.std_status from student s,users u where u.id=s.id and u.id ='$test2'");
        // dd($users);
        return view('file-teacher.index',compact('users','users1','users2','users3'));
    }
    public function show($id)
    {


         $users = DB::select("SELECT * FROM files f,eventcalendars c WHERE f.id=c.id and c.id='$id'");
         $users1 = DB::select("SELECT * FROM files f,eventcalendars c WHERE f.id=c.id and c.id='$id' GROUP BY c.title");


        return view('file-teacher.filedetail', compact('users','users1'));

    }
}
