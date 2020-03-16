<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function showAbout(){
    	return redirect()->away('https://quinnco.online/resume');
    }
}
