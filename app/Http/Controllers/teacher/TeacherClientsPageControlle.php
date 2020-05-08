<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\std_register;
use App\teacher_projectandevent;
class TeacherClientsPageControlle extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = Event::paginate(3);

        return view('clients-page-teacher.index1',compact('users'));

    }

    public function index2()
    {
        $users = Event::all()->toArray();
       return view('home', compact('users'));

    }
    public function show($id)
    {
        $user = Event::find($id);
        $test1 = Auth::user()->id;

        $users = DB::select("select sr.pro_id,sr.stdevent_des,sr.std_id,s.std_name from student_event_register sr ,student s  where s.std_id=sr.std_id and pro_id='$id'");
        $users1 = DB::select("select * from projectandevent where pro_id = '$id'");

       return view('clients-page-teacher.detail',compact('user','id','users1'),['users' => $users]);
    }
    public function edit($id)
    {
        $user = Event::find($id);
        $test1 = Auth::user()->id_tech;

        $users = DB::select("select t.teh_id,t.teh_name from users u,teacher t where u.id_tech=t.id_tech and t.id_tech = '$test1'");


       return view('clients-page-teacher.register',compact('user','id'),['users' => $users]);


    }
    public function create()
    {
        return view('clients-page-teacher.create');
    }


    public function  store1(Request $request)
    {

      $this->validate($request,
      [

        'proname' => 'required',
        'prodes' => 'required',
        'start' => 'required',
        'end' => 'required',
        'color' => 'required',
        'type' => 'required',
        'term' => 'required'
      ]
      );

        $user1 = new Event(
            [


            'pro_name'  => $request->get('proname'),
            'pro_des'  => $request->get('prodes'),
            'start'  => $request->get('start'),
            'end'  => $request->get('end'),
            'color'  => $request->get('color'),
            'type'  => $request->get('type'),
            'term'  => $request->get('term'),


            ]

          );

             $user1->save();
       return redirect()->route('clients-page-teacher')->with('success1','บันทึกข้อมูลเรียบร้อย');
    }

    public function store(Request $request)
    {

      $this->validate($request,
      [

        'proid' => 'required',
        'stdid' => 'required',
        'stdprodes' => 'required',
        'date' => 'required',
        'vehicle1' => 'required'
      ]
      );

        $user1 = new teacher_projectandevent(
            [


            'pro_id'  => $request->get('vehicle1'),
            'teh_id'  => $request->get('stdid'),


            ]

          );

             $user1->save();
       return redirect()->route('clients-page-teacher')->with('success1','บันทึกข้อมูลเรียบร้อย');
    }
}
