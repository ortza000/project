<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventcalendar;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->isAdmin()) {
            return view('admin/dashboard');
        } elseif(auth()->user()->isteacher()) {
            return view('home3');
        } else{
            return view('home');
        }
    }

    public function show()
    {
        $users = DB::table('eventcalendars as e')
                ->join('image as i', 'e.id', '=', 'i.id')
                ->select('e.title', 'i.img','e.id')
                ->where('e.type','=','ข่าวนัดหมาย')
                ->orderBy('start','desc')
                ->paginate(4);
         $num = 1 ;
       return view('home',  compact('users','num'));

    }
    public function show1($id)
    {

        if($id == 1){

        $users = DB::table('eventcalendars as e')
                ->join('image as i', 'e.id', '=', 'i.id')
                ->select('e.title', 'i.img','e.id')
                ->where('e.type','=','อบรม')
                ->orderBy('start','desc')
                ->paginate(4);

                $num = 2 ;
       return view('home',  compact('users','num'));
        }
        else{
            $users = DB::table('eventcalendars as e')
            ->join('image as i', 'e.id', '=', 'i.id')
            ->select('e.title', 'i.img','e.id')
            ->where('e.type','=','กิจกรรม')
            ->orderBy('start','desc')
            ->paginate(4);
            $num = 3 ;
   return view('home',  compact('users','num'));


        }



}
}
