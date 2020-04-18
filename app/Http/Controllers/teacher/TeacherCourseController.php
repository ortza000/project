<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\student_invite;
use App\teacher_course;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TeacherCourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = Project::paginate(5);

        return view('course-teacher.index1',compact('users',));

    }
    // public function show($id)
    // {
    //     $user = Project::find($id);
    //     $test1 = Auth::user()->id;

    //     $users = DB::select("select sr.stdevent_des,sr.std_id,s.std_name from student_event_register sr ,student s  where s.std_id=sr.std_id and pro_id='$id'");


    //    return view('clients-page-teacher.detail',compact('user','id'),['users' => $users]);
    // }

    public function edit($id)
    {
        $user = Project::find($id);
        $test1 = Auth::user()->id_tech;

        $users = DB::select("select t.teh_id,t.teh_name from users u,teacher t where u.id_tech=t.id_tech and t.id_tech = '$test1'");

       return view('course-teacher.register',compact('user','id'),['users' => $users]);


    }
    public function create()
    {
        return view('course-teacher.create');
    }

    public function store(Request $request)
    {

      $this->validate($request,
      [

        'coursename'  => 'required',
        'coursedes'  => 'required',
        'start'  => 'required',
        'end'  => 'required',
        'color'  => 'required',
        'tehid' => 'required',
        'cousreid' => 'required',
        'partdes' => 'required',
        'date' => 'required'
      ]
      );

      $user = new student_invite(
        [
        'teh_id'  => $request->get('tehid'),
        'course_id'  => $request->get('cousreid'),
        'part_des'  => $request->get('partdes'),
        'part_date'  => $request->get('date'),
        ]
      );
        $user->save();

        $user1 = new teacher_course(
            [


            'teh_id'  => $request->get('tehid'),
            'course_id'  => $request->get('cousreid'),


            ]

          );
             $user1->save();

             $user2 = new Project(
                [

                'course_name'  => $request->get('coursename'),
                'course_des' => $request->get('coursedes'),
                'start' => $request->get('start'),
                'end' => $request->get('end'),
                'color' => $request->get('color')
                ]
              );
                $user2->save();
       return redirect()->route('course-teacher.index')->with('success1','บันทึกข้อมูลเรียบร้อย');
    }
    public function store1(Request $request)
    {

      $this->validate($request,
      [

        'coursename'  => 'required',
        'coursedes'  => 'required',
        'start'  => 'required',
        'end'  => 'required',
        'color'  => 'required',
        'type'  => 'required',
        'term'  => 'required',


      ]
      );
             $user = new Project(
                [

                'course_name'  => $request->get('coursename'),
                'course_des' => $request->get('coursedes'),
                'start' => $request->get('start'),
                'end' => $request->get('end'),
                'color' => $request->get('color'),
                'type' => $request->get('type'),
                'term' => $request->get('term')
                ]
              );
                $user->save();
       return redirect()->route('course-teacher.index')->with('success1','บันทึกข้อมูลเรียบร้อย');
    }


}
