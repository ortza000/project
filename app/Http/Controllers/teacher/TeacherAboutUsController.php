<?php

namespace App\Http\Controllers\teacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherAboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $test1 = Auth::user()->id_tech;


        $users = DB::select("SELECT teh_id , teh_name , teh_phone , teh_qualification ,teh_email FROM teacher WHERE id_tech = '$test1'");
        //  dd($users);

        // $users = DB::select("select s.std_name,s.std_card,s.std_year,s.std_phone,s.std_major,s.std_status from student s,users u where u.id=s.id and u.id ='$test2'");
        // dd($users);
        return view('about-us-teacher.index',compact('users'));
    }
    public function index1()
    {
        $test1 = Auth::user()->id_tech;


        $users = DB::select("SELECT * FROM teacher WHERE id_tech = '$test1'");
        $user1 = DB::select("SELECT * FROM course c
        INNER JOIN teacher_course tc on c.course_id=tc.course_id
        INNER JOIN teacher t on t.teh_id=tc.teh_id
        INNER JOIN users u on t.id_tech=u.id_tech
        WHERE u.id_tech='$test1'");

        $user2 = DB::select("SELECT * FROM projectandevent p
        INNER JOIN teacher_projectandevent tj on p.pro_id=tj.pro_id
        INNER JOIN teacher t on t.teh_id=tj.teh_id
        INNER JOIN users u on t.id_tech=u.id_tech
        WHERE u.id_tech='$test1'");

         //dd($user1);

        // $users = DB::select("select s.std_name,s.std_card,s.std_year,s.std_phone,s.std_major,s.std_status from student s,users u where u.id=s.id and u.id ='$test2'");
        // dd($users);
        return view('about-us-teacher.index', compact('users','user1','user2'));
    }
    public function show($id)
    {
        $test1 = Auth::user()->id_tech;


        $users12 = DB::select("select * FROM student_course sc , student s , course c WHERE sc.course_id=c.course_id and sc.std_id=s.std_id and sc.course_id='$id'");


         //dd($user1);

        // $users = DB::select("select s.std_name,s.std_card,s.std_year,s.std_phone,s.std_major,s.std_status from student s,users u where u.id=s.id and u.id ='$test2'");
        // dd($users);
        return view('about-us-teacher.detail-course', compact('users12'));
    }
}
