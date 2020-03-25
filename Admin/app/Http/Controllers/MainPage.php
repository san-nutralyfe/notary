<?php

namespace Admin\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function __invoke(Request $request)
    {
        // print_r(Auth::user()->id);die;
        return view('welcome', ['title' => 'Backend Laravel']);
    }
}
