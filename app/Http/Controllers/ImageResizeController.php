<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App\Images;


class ImageResizeController extends Controller
{
    public function index() {

        $country_list = DB::table('eventcalendars')
        ->groupBy('term')
        ->get();
    return view('image-upload.fileUpload')->with('country_list', $country_list);

    }

    function fetch(Request $request)
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



    public function store(Request $request) {


        $this->validate($request,
        [

            // 'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'proid' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'courseid' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]
        );




        $proid                 =       $request->get('proid');

        $image                   =       $request->file('image1');
        $input['imagename']      =       time().'.'.$image->extension();

        $destinationPath         =       public_path('image/');

        $img                     =       Image::make($image->path());


        // --------- [ Resize Image ] ---------------

        $img->resize(150, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.''.$input['imagename']);


        // ----------- [ Uploads Image in Original Form ] ----------

        $destinationPath        =        public_path('/uploads/original');

        $image->move($destinationPath, $input['imagename']);

        // store into database table
        Images::create(['img' => $input['imagename'],'id' => $proid ,'thumbnail_img' => $input['imagename']]);


        return back()
            ->with('success', 'Image Uploaded successfully')
            ->with('imageName', $input['imagename']);


    }

}
