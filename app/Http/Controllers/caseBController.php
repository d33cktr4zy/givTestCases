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

    public function process(Request $r){
    	
    	$num = $r->number;

    	$res = $this->lucky($num);

    	return view('caseB')->with(['res'=> $res, 'oldNum' => $num]);

    }

    public function lucky($num){
    	// it takes a number 
    	// assign that number to N
    	$N = $num;
    	$k = array();
    	$res = array();
    	//from that $N, find the possible $K value
    	//since the rules say that its only gonna have positive integer, we start loop from 1
    	for($i=1; $i<$N; $i++){
    		if($N % $i > 0){
    			$k[]=$i;
    		}
    		
    	}

    	foreach ($k as $v) {
    		$firstVal = (int)($N / $v); //since we got K, we can determine what is the lowest value
    		$changeAt = $N % $v; //after how many itteration before the end it has to change value

    		$a=array();
    		for($i=0;$i<$v-$changeAt;$i++){
    			//masukkan ke kontainer
    			$a[]=$firstVal;
    		}
    		for($i=($v-$changeAt);$i<$v;$i++){
    			//after value change
    			$a[]=$firstVal + 1;
    		}

    		$res[$v]=$a; //we have all possible combination here!! ^_^
    		# code...
    	}

    	return $res;
    }
}