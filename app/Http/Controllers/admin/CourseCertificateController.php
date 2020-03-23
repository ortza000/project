<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\student_course;
use App\student_invite;
use App\certificate;
use App\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
class CourseCertificateController extends Controller
{
    public function index()
    {
        $users = Project::all()->toArray();


        return view('course_certificate.index', compact('users'));
    }
    public function show($id)
    {


       $users = DB::select("SELECT * FROM `student_invite` WHERE course_id = '$id' and std_id IS NOT NULL");
        return view('course_certificate.detail_cert', compact('users'));
    }
    public function store(Request $request)
{

    $course_id = Input::get('course_id');
    $std_id = Input::get('std_id');


	foreach ($course_id as $index => $code )
	{
        DB::insert('INSERT INTO `certificate` (course_id,std_id) VALUES (?,?)', array($code,$std_id[$index]));
    }
    return "data saved";
}
}
