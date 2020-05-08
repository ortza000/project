<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\student_course;
use App\student_invite;
use Carbon\Carbon;
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



        $course_id = $request->input('course_id');
        $std_id = $request->input('std_id');
        $date = Carbon::now();




        foreach ($std_id as $index => $code )

        {
            DB::insert('INSERT INTO `student_invite` (std_id,course_id,part_des,part_date) VALUES (?,?,?,?)', array($code,$course_id[$index],'เข้าร่วมอบรม', $date));
        }


      return redirect()->route('course_admin.index');
    }


}
