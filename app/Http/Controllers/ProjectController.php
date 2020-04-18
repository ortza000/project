<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Project::paginate(5);
       return view('project.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }
    public function search(Request $request )
    {
         $search = $request->get('search');
         $post = DB::table('course')->where('course_name','like','%'.$search.'%')->paginate(5);
        return view('project.index',['users' => $post]);
    }

    public function search1(Request $request )
    {
         $search = $request->get('search');
         $post = DB::table('course')->where('course_name','like','%'.$search.'%')->paginate(5);
        return view('report.report_course',['users' => $post]);
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


        'coursename' => 'required',
        'coursedes' => 'required',
        'start' => 'required',
        'end' => 'required',
        'color' => 'required',
        'type' => 'required',
        'term' => 'required'


      ]
      );
      $user = new Project(
        [

        'course_name'  => $request->get('coursename'),
        'course_des' => $request->get('coursedes'),
        'start' => $request->get('start'),
        'end' => $request->get('end'),
        'color' => $request->get('color'),
        'type' => $request->get('type'),
        'term' => $request->get('term')
        ]
      );
        $user->save();
      return redirect()->route('project.index')->with('success1','บันทึกข้อมูลเรียบร้อย');
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
        $user = Project::find($id);
        return view('project.edit',compact('user','id'));
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
            'courseid' => 'required',
            'coursename' => 'required',
            'coursedes' => 'required',
            'start' => 'required',
            'end' => 'required',
            'color' => 'required',
            'type' => 'required',
            'term' => 'required'
        ]
        );
        $user = Project::find($id);
        $user->course_id = $request->get('courseid');
        $user->course_name = $request->get('coursename');
        $user->course_des = $request->get('coursedes');
        $user->start = $request->get('start');
        $user->end = $request->get('end');
        $user->color = $request->get('color');
        $user->type = $request->get('type');
        $user->term = $request->get('term');

          $user->save();
        return redirect()->route('project.index')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Project::find($id);
        Project::destroy($id);

      return redirect()->route('project.index')->with('success','ลบเรียบร้อย');
    }
}
