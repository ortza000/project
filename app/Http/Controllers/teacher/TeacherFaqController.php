<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Subject;
class TeacherFaqController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = Subject::all()->toArray();
        $test1 = Auth::user()->id_tech;
        $users = DB::select("select * FROM subject s, users u , teacher t WHERE  u.id_tech=t.id_tech and t.teh_id = s.teh_id and u.id_tech='$test1'");


        return view('faq-teacher.index',compact('users',));

    }
}
