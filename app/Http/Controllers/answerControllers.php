<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class answerControllers extends Controller
{
    //
    public function answer1($arr){
        $soal = $arr;
        foreach ($arr as $i){
            echo $i . '<br>';
        }
    }
}
