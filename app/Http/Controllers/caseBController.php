<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caseBController extends Controller
{
    public function show()
    {
    	//returning a view 
    	return view('caseB');
    }
}
