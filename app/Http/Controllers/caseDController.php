<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class caseDController extends Controller
{
    public function show()
    {
        //this function will only show the page

        return view('caseD');


    }

    public function process(Request $r)
    {
        $oldString = $r->inputString;
        $result = $this->shift($oldString);
        return view('caseD')->with(['result' => $result, 'oldString'=> $oldString]);
    }


    /**
     * @param $arr
     * @return array|string
     * shift function will rearrange the string that has already been shifted
     * and returning the shifted numbers along with the combining string.
     */
    public function shift($arr)
    {
        $str = $arr;
        $numbers = $this->extractNumber($str);
        $connectors = $this->extractHypen($str);

        for($i=0;$i< sizeof($numbers);$i++){
            $res[] = $numbers[$i];

            if($i < sizeof($connectors)){
                $res[]=$connectors[$i];
            }
        }
        $res = implode('',$res);
        return $res;
    }

    /**
     * @param $str
     * @return array
     * extractHypen will extract any string or character between 2 adjacent numbers
     * These strings will be glued back later after the shifting process
     */
    public function extractHypen($str)
    {

        $counter = preg_match_all('/[^0-9]+/', $str, $hyp);
        foreach ($hyp[0] as $h) {
            $hype[] = $h;
        }
        return $hype;

    }


    /**
     * @param $string
     * @return mixed
     *
     * extractNumber($string)
     * This function will extract the numbers only from a string and shift it as
     * the rules stated.
     *
     * the $counter will hold the amount of numbers there are in the input string
     * then the for loops will shift it by determinning if the current loop is a
     * even loop. If so, the loop will shift its content with the content after
     * this one.
     * But if the loop is 1 loop before max loop, it will only put that content
     * to the result.
     */
    public function extractNumber($string)
    {
        $str = $string;
        $counter = preg_match_all('/[0-9]+/', $str, $nums);
        for ($i = 0; $i < $counter; $i++) {
            if ($i % 2 == 0) {
                if ($i + 1 < $counter) {

                    $a = $nums[0][$i];
                    $b = $nums[0][$i + 1];
                    $nom[$i] = $b;
                    $nom[$i + 1] = $a;
                }
                if ($i + 1 == $counter) {
                    $nom[$i] = $nums[0][$i];
                }
            }
        }
        return $nom;
    }
}
