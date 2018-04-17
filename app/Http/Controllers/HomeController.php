<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;

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
        // LaraFlash::add()->content("Hellow World")->priority(6)->type("Info");
        // LaraFlash::success("Yaiy it's working");
        LaraFlash::snackbar("click to continue");
        LaraFlash::new()->content('Hello World')->title('Welcome')->type('info')->priority(5);
        return view('home');
    }
}
