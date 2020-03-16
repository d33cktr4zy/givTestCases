<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caseEController extends Controller
{
    public function show()
    {
        //This function will render the page to the screen
        return view('caseE');

    }

    public function process(Request $req)
    {
        // this will process the form and return the result to the view
        if(empty($req->numberOne) or empty($req->numberTwo)){
            dd('number is null');
        }
        $a = $req->numberOne;
        $b = $req->numberTwo;
        $reva= $this->reverse($a);
        $revb= $this->reverse($b);
        $sum= $reva + $revb;
        $result = $this->sumTwoNumber($a,$b);
        $because = "Because: " . $reva ." + ".$revb . " = ". $sum;

        return view('caseE')->with(['result'=>$result,'because'=>$because,'oldOne'=>$a, 'oldTwo'=>$b]);
    }

    /**
     * @param $a
     * @param $b
     * @return float|int
     *
     * sumTwoNumber is the function that solve the D Case. This function accept two numbers,
     * reverse each number, sum the reversed numbers, and return the reversed sum result.
     */
    public function sumTwoNumber($a,$b){

        $a= $this->reverse($a);
        $b= $this->reverse($b);

        $c= $a + $b;

        $c= $this->reverse($c);
        return $c;
    }

    /**
     * @param $num
     * @return int
     * This function will only do one thing: reverse the given num variable.
     * This is done without using help function. but, instead it use modulo
     * and multiplication and division
     *
     * The function declare a holding variable ($rev) and set to 0.
     * then the function initiate loop that as long as the $num variable
     * is not 0, set the $rev to the sum of the multiplication of the
     * original $rev and the 10 modulo of $num.
     * then, divide $num with 10 and cast it to integer
     * repeat the proces until $num is 0
     *
     * then return $rev as the result.
     */
    public function reverse($num){
        $rev = 0;
        while($num != 0){
            $rev = ($rev*10) + ($num%10);
            $num = (int)($num/10);
        };
        return (int)$rev;
    }

}
