<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Student;
class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $test1 = Auth::user()->id;


        $users = DB::select("select s.std_status,s.std_major,s.std_phone,s.std_year,s.std_card,s.std_name,s.std_id,sr.pro_id,p.pro_name
        FROM users u
        INNER JOIN student s on u.id=s.id
       	INNER JOIN student_event_register sr on s.std_id=sr.std_id
        INNER JOIN projectandevent p on p.pro_id=sr.pro_id
        WHERE u.id ='$test1'");
        // dd($users);

        // $users = DB::select("select s.std_name,s.std_card,s.std_year,s.std_phone,s.std_major,s.std_status from student s,users u where u.id=s.id and u.id ='$test2'");
        // dd($users);
        return view('about-us.index', ['users' => $users]);
    }

}