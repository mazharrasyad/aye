<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usaha;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usaha = Usaha::all();
        return view('welcome',compact('usaha'));
    }
    public function welcome()
    {
              $usaha = Usaha::all();
        return view('welcome',compact('usaha'));
        
    }
}
