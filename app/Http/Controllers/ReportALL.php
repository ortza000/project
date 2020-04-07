<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Project;
use App\Student;
use App\Event;
use App\certificate;
use Illuminate\Support\Facades\DB;
class ReportALL extends Controller
{
    public function index()
    {
      $users = Subject::paginate(5);
      return view('report.report_subject', compact('users'));
    }
    public function index1()
    {
      $users = Project::paginate(5);
      return view('report.report_course', compact('users'));
    }
    public function show($id)
    {

        $users = DB::select("select * FROM student_course sc , student s , course c WHERE sc.course_id=c.course_id and sc.std_id=s.std_id and sc.course_id='$id'");

      return view('report.detailreport_course', compact('users'));
    }

    public function show1($id)
    {

        $users = DB::select("select * FROM student_event_register se , student s , projectandevent p WHERE se.pro_id=p.pro_id and se.std_id=s.std_id and se.pro_id='$id'");

      return view('report.detailreport_event', compact('users'));
    }

    public function show2($id)
    {

        $users = DB::select("select * FROM subject s,teacher t WHERE s.teh_id = t.teh_id and s.teh_id = '$id'");

      return view('report.detailreport_subject', compact('users'));
    }

    public function show3($id)
    {

        $users = DB::select("select * FROM certificate c,student s WHERE c.std_id = s.std_id and c.course_id = '$id'");

      return view('report.detailreport_cert', compact('users'));
    }



    public function index2()
    {
      $users = Event::paginate(5);
      return view('report.report_event', compact('users'));
    }
    public function index3()
    {
        $users = DB::table('student')
        ->where('std_status','=','ศิษย์เก่า')
        ->paginate(4);
      return view('report.report_studentold', ['users' => $users]);
    }
    public function index4()
    {
        $users =  DB::select("select * FROM course  ");
      return view('report.report_cert', compact('users'));
    }
}
