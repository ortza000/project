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
    public function create()
    {
        $test1 = Auth::user()->id_tech;
        $users = DB::select("select t.teh_id,t.teh_name from users u,teacher t where u.id_tech=t.id_tech and t.id_tech = '$test1'");
        $user = DB::select("select sub_id from subject where sub_id='1'");

        return view('faq-teacher.create',compact('user'),['users' => $users]);

    }

    public function store(Request $request)
    {


      $this->validate($request,
      [

        'tehid' => 'required',
        'subname' => 'required',
        'subdes' => 'required',
        'subterm' => 'required'
      ]
      );
      $user = new Subject(
        [

        'teh_id'  => $request->get('tehid'),
        'sub_name'  => $request->get('subname'),
        'sub_des'  => $request->get('subdes'),
        'sub_term' => $request->get('subterm')
        ]
      );
        $user->save();
      return redirect()->route('faq-teacher.index')->with('success1','บันทึกข้อมูลเรียบร้อย');
    }




}
