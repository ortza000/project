<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Event::all()->toArray();
       return view('event.index', compact('users'));

    }
    public function index2()
    {
        $users = Event::all()->toArray();
       return view('home', compact('users'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    public function register($id)
    {

        $user = Event::find($id);
        return view('clients-page.register',compact('user','id'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
      [
        'proid' => 'required',
        'proname' => 'required',
        'prodes' => 'required'
      ]
      );
      $user = new Event(
        [
        'pro_id'    => $request->get('proid'),
        'pro_name'  => $request->get('proname'),
        'pro_des'  => $request->get('prodes')
        ]
      );
        $user->save();
      return redirect()->route('clients-page-teacher')->with('success1','บันทึกข้อมูลเรียบร้อย');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
