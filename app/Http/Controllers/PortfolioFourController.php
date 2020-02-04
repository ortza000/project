<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioFourController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('portfolio-four.index');
    }
}
