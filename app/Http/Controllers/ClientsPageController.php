<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;

use App\std_register;
class ClientsPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = Event::all()->toArray();

        return view('clients-page.index',compact('users',));

    }

    public function index2()
    {
        $users = Event::all()->toArray();
       return view('home', compact('users'));

    }

    public function edit($id)
    {
        $user = Event::find($id);
        $test1 = Auth::user()->id;

        $users = DB::select("select u.id,s.std_id,s.std_name from users u,student s where u.id=s.id and u.id = '$test1'");


       return view('clients-page.register',compact('user','id'),['users' => $users]);
    }
    public function store(Request $request)
    {
      $this->validate($request,
      [

        'proid' => 'required',
        'stdid' => 'required',
        'stdprodes' => 'required',
        'date' => 'required'
      ]
      );
      $user = new std_register(
        [


        'pro_id'  => $request->get('proid'),
        'std_id'  => $request->get('stdid'),
        'stdevent_des'  => $request->get('stdprodes'),
        'register_date'  => $request->get('date'),

        ]
      );
        $user->save();
      return redirect()->route('clients-page.index')->with('success1','บันทึกข้อมูลเรียบร้อย');
    }

}
