<?php

namespace jp\Http\Controllers\Backend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class BackEndBaseController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;


    public function __construct ()
    {
    	$this->middleware('auth');
    }
}
