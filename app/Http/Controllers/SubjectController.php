<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = Subject::paginate(5);
      return view('Subject.index', compact('users'));
    }

   public function search(Request $request )
    {
         $search = $request->get('search');
         $post = DB::table('subject')->where('sub_name','like','%'.$search.'%')->paginate(5);
        return view('Subject.index',['users' => $post]);
    }


   public function search1(Request $request )
   {
        $search = $request->get('search');
        $post = DB::table('subject')->where('sub_name','like','%'.$search.'%')->paginate(5);
       return view('report.report_subject',['users' => $post]);
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        $test1 = Auth::user()->id_tech;
        $users = DB::select("select t.teh_id,t.teh_name from users u,teacher t where u.id_tech=t.id_tech and t.id_tech = '$test1'");
        $user = DB::select("select sub_id from subject where sub_id='1'");

        return view('Subject.create',compact('user'),['users' => $users]);

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
        $user = Subject::find($id);
       return view('Subject.edit',compact('user','id'));
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
            'subid' => 'required',
            'tehid' => 'required',
            'subname' => 'required',
            'subdes' => 'required',
            'subterm' => 'required'

        ]
        );
        $user = Subject::find($id);
        $user->sub_id = $request->get('subid');
        $user->teh_id = $request->get('tehid');
        $user->sub_name = $request->get('subname');
        $user->sub_des = $request->get('subdes');
        $user->sub_term = $request->get('subterm');
          $user->save();
        return redirect()->route('Subject.index')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Subject::find($id);
        Subject::destroy($id);

      return redirect()->route('Subject.index')->with('success','ลบเรียบร้อย');
    }
}
