<?php



namespace App\Http\Controllers;



use App\Eventcal;

use Illuminate\Http\Request;


use Illuminate\Http\Redirect;

use Illuminate\Http\Response;
class FullCalendarEventMasterController extends Controller

{



    public function index()

    {

        if(request()->ajax())

        {
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
         $data = Eventcal::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
         return Response::json($data);
        }
        return view('fullcalender');

    }





    public function create(Request $request)

    {

        $insertArr = [ 'title' => $request->title,

                       'start' => $request->start,

                       'end' => $request->end

                    ];

        $event = Eventcal::insert($insertArr);

        return Response::json($event);

    }





    public function update(Request $request)

    {

        $where = array('id' => $request->id);

        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];

        $event  = Eventcal::where($where)->update($updateArr);

        return Response::json($event);



    }





    public function destroy(Request $request)

    {

        $event = Eventcal::where('id',$request->id)->delete();



        return Response::json($event);

    }





}
