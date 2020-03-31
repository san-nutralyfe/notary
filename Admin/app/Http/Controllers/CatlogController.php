<?php

namespace Admin\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CatlogController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        // $this->middleware('auth:admin');
    }

    public function category(){
        return view('category.add', ['title' => 'Backend Laravel']);
    }


}
