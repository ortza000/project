<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\student_course;
use App\student_invite;

use App\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class CourseStatusController extends Controller
{
    public function index()
    {
        $users = Project::all()->toArray();
       return view('course_admin.index', compact('users'));
    }


    public function show($id){
        $test1 = Auth::user()->id;
        $users12 = DB::select("select * FROM student_course sc , student s , course c WHERE sc.course_id=c.course_id and sc.std_id=s.std_id and sc.course_id='$id'");
        return view('course_admin.course_status', compact('users12'));
    }
    public function create($std_id,$course_id)
    {


        $test1 = Auth::user()->id;
        $users = DB::select("select * FROM student_course sc , student s , course c WHERE sc.course_id=c.course_id and sc.std_id=s.std_id and sc.course_id='$course_id' and sc.std_id='$std_id'");
        return view('course_admin.course_chang', compact('users'));

    }
    public function store(Request $request)
    {
      $this->validate($request,
      [

        'stdid' => 'required',
        'courseid' => 'required',
        'partdes' => 'required',
        'partdate' => 'required'
      ]
      );
      $user = new student_invite(
        [


        'course_id'   => $request->get('courseid'),
        'std_id'      => $request->get('stdid'),
        'part_des'    => $request->get('partdes'),
        'part_date'   => $request->get('partdate')

        ]
      );
      $user->save();
      return redirect()->route('course_admin.index');
    }


}
