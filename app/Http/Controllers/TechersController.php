<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class TechersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = Teacher::all()->toArray();
      return view('teacher.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
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
        'tehid' => 'required',
        'tehname' => 'required',
        'tehphone' => 'required',
        'tehqualification' => 'required',
        'tehemail' => 'required'
      ]
      );
      $user = new Teacher(
        [
        'teh_id'    => $request->get('tehid'),
        'teh_name'  => $request->get('tehname'),
        'teh_phone'  => $request->get('tehphone'),
        'teh_qualification'  => $request->get('tehqualification'),
        'teh_email' => $request->get('tehemail')
        ]
      );
        $user->save();
      return redirect()->route('teacher.index')->with('success1','บันทึกข้อมูลเรียบร้อย');
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
        $user = Teacher::find($id);
       return view('teacher.edit',compact('user','id'));
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
        $this->validate($request,
        [
            'tehid' => 'required',
            'tehname' => 'required',
            'tehphone' => 'required',
            'tehqualification' => 'required',
            'tehemail' => 'required'

        ]
        );
        $user = Teacher::find($id);
        $user->teh_id = $request->get('tehid');
        $user->teh_name = $request->get('tehname');
        $user->teh_phone = $request->get('tehphone');
        $user->teh_qualification = $request->get('tehqualification');
        $user->teh_email = $request->get('tehemail');
          $user->save();
        return redirect()->route('teacher.index')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Teacher::find($id);
        Teacher::destroy($id);

      return redirect()->route('teacher.index')->with('success','ลบเรียบร้อย');
    }
}
