<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caseImpControllers extends Controller
{
	public $one = [68168,87954,32158,8774];
	public $two = [5408, 6604,32158,84984,8774,34871];

    

    public function commonNumbers(){
    	$d = array_intersect($this->one, $this->two);

    	foreach($d as $key=>$res){
    		$x[]=$res;	
    	}
    	return $x;
    }

    public function smallest($nth){
		$c = array_merge($this->one, $this->two);
		asort($c);

		if($nth > sizeof($c)){
			return 'Out of Range';
		}

		foreach($c as $key=>$res){
			$d[] = $res;
		}

		return $d[$nth];
    }

    //showing the page
    public function show(){
    	$x = $this->commonNumbers();

    	return view('caseImp')->with(['num' =>$x]);
    }

    public function process(Request $r){
    	// dd($r);
    	$nth = $r->nth;
    	$c = $this->commonNumbers();

    	$d = $this->smallest($nth);

    	return view('caseImp')->with(['num'=> $c, 'nth'=>$d]);
    }
}
