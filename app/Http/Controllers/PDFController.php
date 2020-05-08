<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\certificate;
use App\Event;
use PDF;

class PDFController extends Controller
{
    public function pdf($id)
    {
        $test1 = Auth::user()->id;
        $certificate = DB::select("SELECT * FROM certificate c
        INNER JOIN student s ON c.std_id=s.std_id
        INNER JOIN course co ON c.course_id = co.course_id
        INNER JOIN users u ON u.id = s.id
        WHERE u.id = '$test1' and c.course_id ='$id'");

        $certificate1 = DB::select("select * FROM eventcalendars  WHERE course_id ='11' ");

        $pdf =PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('pdf',['certificate' => $certificate ],['certificate1' => $certificate1 ]);

        return @$pdf->stream();
    }


    public function pdfEevnt($id)
    {

        $user = Event::find($id);
        $test1 = Auth::user()->id;

        $users = DB::select("select sr.stdevent_des,sr.std_id,s.std_name from student_event_register sr ,student s  where s.std_id=sr.std_id and pro_id='$id'");
        $users1 = DB::select("select * from projectandevent where pro_id = '$id'");



        $pdf1 =PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('pdfEvent',['users' => $users ],['users1' => $users1 ]);

        return @$pdf1->stream();
    }
}

