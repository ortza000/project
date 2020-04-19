<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\student_course;
use App\Eventcalendar;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = DB::table('eventcalendars')
        ->select('course_id','id','title', 'description')
        ->where('type','=','อบรม')
        ->orderBy('start','desc')
        ->paginate(4);

        return view('course.index',['users' => $users]);

    }



    public function edit($id)
    {
        $user = Project::find($id);
        $test1 = Auth::user()->id;

        $users = DB::select("select u.id,s.std_id,s.std_name from users u,student s where u.id=s.id and u.id = '$test1'");
       return view('course.register',compact('user','id'),['users' => $users]);


    }
    public function store(Request $request)
    {
      $this->validate($request,
      [

        'proid' => 'required',
        'stdid' => 'required',
        'date' => 'required'
      ]
      );
      $user = new student_course(
        [


        'course_id'  => $request->get('proid'),
        'std_id'  => $request->get('stdid'),
        'stdcourse_date'  => $request->get('date'),

        ]
      );
        $user->save();
      return redirect()->route('course.index')->with('success1','บันทึกข้อมูลเรียบร้อย');
    }
}
