<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventcalendar;
class NewindexController extends Controller
{

    public function index()
    {

        $users123 = Eventcalendar::paginate(5);
        return view('home', compact('users123'));
    }
}
