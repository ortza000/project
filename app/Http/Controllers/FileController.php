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
        $users = DB::table('eventcalendars')
        ->groupBy('term')
        ->get();


    $users1 = DB::table('eventcalendars')
        ->groupBy('term')
        ->get();

        return view('fileupload.file', compact('users','users1'));
    }

    function fetch(Request $request)
    {

        $id=$request->get('select');



        $query = DB::table('eventcalendars')

         ->select('title','id')
         ->where('term','=',$id )
         ->orderBy('title','asc')
         ->get();

         $output = '<option value="">เลือกประเภท</option>';

         foreach ($query as $row){
            $output.='<option value="'.$row->id.'">'.$row->title.'</option>';

         }


         echo $output;



    }
    function fetch1(Request $request)
    {

        $id=$request->get('select');




        $query = DB::table('eventcalendars')

         ->select('title','id')
         ->where('term','=',$id)
         ->orderBy('title','asc')
         ->get();

         $output = '<option value="">เลือกประเภท</option>';

         foreach ($query as $row){
            $output.='<option value="'.$row->id.'">'.$row->title.'</option>';

         }


         echo $output;



    }

    public function store(Request $request)
    {
       request()->validate([
         'file'  => 'required|mimes:doc,docx,pdf,txt|max:2048',

         'coursename' => 'required'
       ]);


       $coursename                 =       $request->get('coursename');

       if ($files = $request->file('file')) {
           $destinationPath = 'files/'; // upload path
           $profilefile = $files->getClientOriginalName();
           $files->move($destinationPath, $profilefile);
           $insert['name'] = "$profilefile";
        }
        Document::create(['name' => $insert['name'],'id' =>  $coursename]);

        return Redirect::to("fileupload")
        ->withSuccess('Great! file has been successfully uploaded.');

    }
}
