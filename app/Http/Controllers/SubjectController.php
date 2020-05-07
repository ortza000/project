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

        $query = DB::select('select * FROM subject GROUP by sub_name ORDER BY `subject`.`sub_id` ASC');






      return view('Subject.index', compact('query'));
    }

   public function search(Request $request )
    {
         $search = $request->get('search');
         $post = DB::table('subject')->where('sub_name','like','%'.$search.'%')->groupBy('sub_name')->paginate(5);
        return view('Subject.index',['query' => $post]);
    }


   public function search1(Request $request )
   {
        $search = $request->get('search');
        $post = DB::table('subject')->where('sub_name','like','%'.$search.'%')->groupBy('sub_name')->paginate(5);
       return view('report.report_subject',['query' => $post]);
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $users1 = DB::table('subject')

        ->select('sub_id','sub_name','sub_des','sub_term')
        ->groupBy('sub_name')
        ->paginate(5);


        $users = DB::select("select * from teacher");
     ;
        return view('Subject.create',['users' => $users],['users1' => $users1]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $subname = $request->input('subname');
        $subdes = $request->input('subdes');
      if($subname == '' &&  $subdes ==''  ){


      $this->validate($request,
      [

        'tehid' => 'required',
        'subname1' => 'required',
        'subdes1' => 'required',
        'subterm' => 'required'
      ]
      );
      $user = new Subject(
        [

        'teh_id'  => $request->get('tehid'),
        'sub_name'  => $request->get('subname1'),
        'sub_des'  => $request->get('subdes1'),
        'sub_term' => $request->get('subterm')
        ]
      );
        $user->save();
    }else{

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
    }



      return redirect()->route('Subject.index')->with('success1','บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Subject::find($id);
        $users = DB::select("select * from teacher");
        $users1 = DB::select("select * from subject");
        return view('Subject.insertsubject',compact('user','users','users1','id'));
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

        $user = Subject::find($id)->delete();


      return redirect()->route('Subject.index')->with('success','ลบเรียบร้อย');
    }
}
