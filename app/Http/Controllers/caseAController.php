<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caseAController extends Controller
{
	public function show()
	{
		return view('caseA');
	}

    //parse the string to array
	public function parse(Array $arr)
	{
		$fnd = 0;
		$arrs = $arr;
		sort($arrs);
		$len = sizeof($arrs);

		$res=[]; //initiating res so it can be use to search for the first time

		for($i=0;$i<($len-2);$i++){ //setting the hash. we use two hash hence minus 2
			$head = $arrs[$i];
			$lBound = $i + 1;
			$rBound = $len -1;
			
			//setting the head
			while($lBound < $rBound){
				$dua = $arrs[$lBound];

				$tiga = $arrs[$rBound];
				if($head + $dua + $tiga == 0){
					$fnd = 1; //changing the found flag
					//found a triplet so we save it to a variable
					// print($head. ' - '.$dua.' - '.$tiga);
					$temp=[$head, $dua, $tiga];
					sort($temp);
					if(!in_array($temp, $res)){
						$res[] = $temp;
					}
					//when match found, decrease the boundaries
					$lBound = $lBound +1;
					$rBound = $rBound-1;

				}
				elseif ($head + $dua + $tiga > 0) {
					//if match is not found in the itteration
					//decrease the right Boundaries
					$rBound = $rBound - 1;
				}
				else{ //meaning <0
					//decrease the left bound
					$lBound = $lBound + 1;

					
				}
			}
		}
		if($fnd == 1){

			return $res;
		}else{
			return 'No Suitable triplets available';
		}
	}

	public function process(Request $r){
		$arr = $r->arr;
		// dd($arr);
		$res = $this->parse($arr);
		if(is_array($res)){
			$str='[<br>';
			foreach($res as $val){
				$a='[';
				foreach($val as $v){
					$a=$a . $v . ', ';
				}		
				$a = $a . '],<br>';

				$str=$str.$a;

			}
			$str = $str.']';
			
			$res = $str;
		}
		// dd($res);
		return view('caseA')->with(['res' =>$res]);
	}
}
