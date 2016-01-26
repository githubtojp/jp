<?php

namespace jp\Http\Controllers;

use Illuminate\Http\Request;

use jp\Http\Requests;
use jp\Http\Controllers\Controller;

class FrontEndController extends Controller
{



    public function home ()
    {
        return view('welcome');
    }


}
