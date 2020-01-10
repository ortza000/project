<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Student::all()->toArray();
        return view('user.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');

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
          'stdid' => 'required',
          'stdname' => 'required',
          'stdcard' => 'required',
          'stdyear' => 'required',
          'stdphone' => 'required',
          'stdmajor' => 'required',
          'stdstatus' => 'required'

        ]
        );
        $user = new Student(
          [
          'std_id'    => $request->get('stdid'),
          'std_name'  => $request->get('stdname'),
          'std_card'  => $request->get('stdcard'),
          'std_year'  => $request->get('stdyear'),
          'std_phone' => $request->get('stdphone'),
          'std_major' => $request->get('stdmajor'),
          'std_status' => $request->get('stdstatus')
          ]
        );
          $user->save();
        return redirect()->route('user.index')->with('success','บันทึกข้อมูลเรียบร้อย');


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
       $user = Student::find($id);
       return view('user.edit',compact('user','id'));
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
        'stdid' => 'required',
        'stdname' => 'required',
        'stdcard' => 'required',
        'stdyear' => 'required',
        'stdphone' => 'required',
        'stdmajor' => 'required',
        'stdstatus' => 'required'

      ]
      );
      $user = Student::find($id);
      $user->std_id = $request->get('stdid');
      $user->std_name = $request->get('stdname');
      $user->std_card = $request->get('stdcard');
      $user->std_year = $request->get('stdyear');
      $user->std_phone = $request->get('stdphone');
      $user->std_major = $request->get('stdmajor');
      $user->std_status = $request->get('stdstatus');
        $user->save();
      return redirect()->route('user.index')->with('success','บันทึกข้อมูลเรียบร้อย');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // dd($id);
      $user = Student::find($id);
      Student::destroy($id);

      return redirect()->route('user.index')->with('success','ลบเรียบร้อย');
    }
}
