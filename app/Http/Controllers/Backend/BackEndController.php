<?php

namespace jp\Http\Controllers\Backend;

use Illuminate\Http\Request;

use jp\Http\Requests;

use jp\Http\Controllers\Backend\BackEndBaseController;

class BackEndController extends BackEndBaseController
{


    /**
     * Display Backend Dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');        

    }

}
