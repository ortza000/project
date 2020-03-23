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
        $users = DB::select("SELECT * FROM course ");
        $users1 = DB::select("SELECT * FROM projectandevent ");
        return view('fileupload.file', compact('users','users1'));
    }

    public function store(Request $request)
    {
       request()->validate([
         'file'  => 'required|mimes:doc,docx,pdf,txt|max:2048',
         'proid' => 'required',
         'courseid' => 'required'
       ]);

       $proid                 =       $request->get('proid');
       $courseid                 =       $request->get('courseid');

       if ($files = $request->file('file')) {
           $destinationPath = 'files/'; // upload path
           $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profilefile);
           $insert['name'] = "$profilefile";
        }
        Document::create(['name' => $insert['name'],'pro_id' => $proid ,'course_id' =>  $courseid]);

        return Redirect::to("fileupload")
        ->withSuccess('Great! file has been successfully uploaded.');

    }
}
