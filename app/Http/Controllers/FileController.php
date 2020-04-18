<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
Use App\Document;

class FileController extends Controller
{
    public function index()
    {
        $users = DB::table('course')
        ->groupBy('term')
        ->get();


    $users1 = DB::table('projectandevent')
        ->groupBy('term')
        ->get();

        return view('fileupload.file', compact('users','users1'));
    }

    function fetch(Request $request)
    {

        $id=$request->get('select');



        $query = DB::table('course')

         ->select('course_name','course_id')
         ->where('term','=',$id)
         ->orderBy('course_name','asc')
         ->get();

         $output = '<option value="">เลือกประเภท</option>';

         foreach ($query as $row){
            $output.='<option value="'.$row->course_id.'">'.$row->course_name.'</option>';

         }


         echo $output;



    }
    function fetch1(Request $request)
    {

        $id=$request->get('select');



        $query = DB::table('projectandevent')

         ->select('pro_name','pro_id')
         ->where('term','=',$id)
         ->orderBy('pro_name','asc')
         ->get();

         $output = '<option value="">เลือกประเภท</option>';

         foreach ($query as $row){
            $output.='<option value="'.$row->pro_id.'">'.$row->pro_name.'</option>';

         }


         echo $output;



    }

    public function store(Request $request)
    {
       request()->validate([
         'file'  => 'required|mimes:doc,docx,pdf,txt|max:2048',
         'proname' => 'required',
         'coursename' => 'required'
       ]);

       $proname                 =       $request->get('proname');
       $coursename                 =       $request->get('coursename');

       if ($files = $request->file('file')) {
           $destinationPath = 'files/'; // upload path
           $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profilefile);
           $insert['name'] = "$profilefile";
        }
        Document::create(['name' => $insert['name'],'pro_id' => $proname ,'course_id' =>  $coursename]);

        return Redirect::to("fileupload")
        ->withSuccess('Great! file has been successfully uploaded.');

    }
}
