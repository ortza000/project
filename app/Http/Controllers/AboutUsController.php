<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Student;
use App\Project;
use App\student_invite;
use Facade\Ignition\DumpRecorder\Dump;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $test1 = Auth::user()->id;


        $users = DB::select("SELECT std_name , std_card , std_year , std_phone ,std_major,std_status FROM student WHERE id = '$test1'");
        // dd($users);
        $users1 = DB::select("select * FROM student_course sc,course c,users u,student s  WHERE s.id=u.id and sc.course_id=c.course_id and u.id='$test1'");
        // $users = DB::select("select s.std_name,s.std_card,s.std_year,s.std_phone,s.std_major,s.std_status from student s,users u where u.id=s.id and u.id ='$test2'");
        // dd($users);


        return view('about-us.index',['users' => $users],['users1' => $users1]);
    }
    public function index1()
    {
        $test1 = Auth::user()->id;


        $user3 = DB::select("SELECT std_name , std_card , std_year , std_phone ,std_major,std_status FROM student WHERE id = '$test1'");


        $user1 = DB::select("SELECT * FROM course c
        INNER JOIN student_course sc on c.course_id=sc.course_id
        INNER JOIN student s on s.std_id=sc.std_id
        INNER JOIN users u on s.id=u.id
        WHERE u.id='$test1'");

        $user2 = DB::select("SELECT * FROM projectandevent p
        INNER JOIN student_event_register sr on p.pro_id=sr.pro_id
        INNER JOIN student s on s.std_id=sr.std_id
        INNER JOIN users u on s.id=u.id
        WHERE u.id='$test1'");
// dd($user1);
        $user4 = DB::select("select * FROM certificate c
        INNER JOIN course co on co.course_id=c.course_id
        INNER JOIN student s on s.std_id=c.std_id
        INNER JOIN users u on s.id=u.id
        WHERE u.id='$test1'");

        // $users = DB::select("select s.std_name,s.std_card,s.std_year,s.std_phone,s.std_major,s.std_status from student s,users u where u.id=s.id and u.id ='$test2'");
        // dd($users);
        return view('about-us.index', compact('user1','user2','user3','user4'));
    }

    public function index2()
    {
        // dd($users);
        $users123 = DB::select("select * FROM `student_invite` WHERE std_id='SD001'");
        // $users = DB::select("select s.std_name,s.std_card,s.std_year,s.std_phone,s.std_major,s.std_status from student s,users u where u.id=s.id and u.id ='$test2'");
        // dd($users);
        dd($users123);
        return view('about-us.inviteCourse',['users123' => $users123]);
    }

    public function edit($id)
    {

        $user = Project::find($id);

        $test1 = Auth::user()->id;

        $users12 = DB::select("select * FROM student_course sc,course c,users u,student s WHERE s.id=u.id and sc.course_id=c.course_id and sc.course_id='$id' and u.id='$test1'");


       return view('about-us.inviteCourse',compact('user','id'),['users1' => $users12]);
    }
    public function show()
    {

       // dd($users);
       $users123 = DB::select("select * FROM `student_invite` WHERE std_id='SD001'");
       // $users = DB::select("select s.std_name,s.std_card,s.std_year,s.std_phone,s.std_major,s.std_status from student s,users u where u.id=s.id and u.id ='$test2'");
       // dd($users);

       return view('about-us.detailinvite',['users123' => $users123]);
    }
    public function store(Request $request)
    {
      $this->validate($request,
      [

        'course' => 'required',
        'stdid' => 'required',
        'stdprodes' => 'required',
        'date' => 'required'
      ]
      );
      $user = new student_invite(
        [


        'course_id'   => $request->get('course'),
        'std_id'      => $request->get('stdid'),
        'part_des'    => $request->get('stdprodes'),
        'part_date'   => $request->get('date')

        ]
      );
      $user->save();
      return redirect()->route('clients-page.index')->with('success1','บันทึกข้อมูลเรียบร้อย');
    }


}
