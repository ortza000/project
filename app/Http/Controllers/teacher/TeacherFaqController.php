<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

        return view('faq-teacher.index',compact('users',));

    }
}
