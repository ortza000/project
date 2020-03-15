<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App\Images;


class ImageResizeController extends Controller
{
    public function index() {


        $users = DB::select("SELECT * FROM projectandevent ");
        $users1 = DB::select("SELECT * FROM course ");
        return view('image-upload.fileUpload', compact('users','users1'));

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
        //  dd($input['proid']);
        $course                   =       $request->get('courseid');
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
        Images::create(['img' => $input['imagename'],'pro_id' =>  $proid,'course_id' => $course ,'thumbnail_img' => $input['imagename']]);


        return back()
            ->with('success', 'Image Uploaded successfully')
            ->with('imageName', $input['imagename']);


    }

}
