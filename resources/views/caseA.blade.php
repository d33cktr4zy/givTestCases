@extends('index')
@section('title')
Case A - Sum 3 Numbers
@endsection

@section('content')
<section>
    <div class="text-center">
        <H1>Case A</h1>
            <h2>Sum 3 numbers</h2>
        </div>

        <div class="row">
            <div class="col-12">
                <h3>
                    Description
                </h3>
            </div>
            <div class="row col-12">
                <div class="col-12">
                    <p>There is a sets array of x integers. The array contains integers which if
                    x1 + x2 + x3 resulting in 0.</p>
                    <ul>
                        <li>
                            Sets of an array of integers , be it positive or negative integers and no
                            limit on n integers.
                        </li>
                        <li>Sum of triplets must result in zero</li>
                        <li>A solution cannot be duplicate triplets, but duplicate twin is allowed.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Input Format</h2>
            </div>
            <div class="col-12">
                <p>The input is given in the following format:</p>
                <div class="alert alert-dark rounded">
                    [x1,x2,x3,x4,x5,x6,x7]
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Output Format</h2>
            </div>
            <div class="row col-12">
                <p>An array containing solution of sum of 3 integer result in zero</p>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <h2>Sample Input</h2>
            </div>
            <div class="col-12">
                <div class="alert alert-dark rounded">
                    [1,2,4,0,-1,-3,-6,-1]
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-12">
                <h2>Sample Output</h2>
            </div>

            <div class="col-12">
                <div class="alert alert-dark rounded">
                    <pre>

                        [
                        [-1,0,1],
                        [-1,-1,2],
                        [4,-6,2],
                        [4,-3,-1],
                        [1,2,-3]
                        ]
                    </pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('solution')

<div class="text-center"><h2>Code View</h2></div>
<div class="container">
    <div class="row alert alert-info" style="height: 350px; overflow-y: scroll;">
        <pre>
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
            $str='[';
            foreach($res as $val){
                $a='[';
                foreach($val as $v){
                    $a=$a . $v . ', ';
                }       
                $a = $a . '],';

                $str=$str.$a;

            }
            $str = $str.']';
            
            $res = $str;
        }
        // dd($res);
        return view('caseA')->with(['res' =>$res]);
    }
        </pre>
    </div>
</div>

@endsection

@section('result')
<div class="text-center"><h3>Solution Tester</h3></div>
<div class="container">  
    <div class="form-group">  
        {!! Form::open(['action'=>'caseAController@process']) !!}
        <div class="table-responsive">  
         <table class="table table-bordered" id="dynamic_field">  
            <tr>  
                <td>
                    <input type="number" name="arr[]" placeholder="Enter a Number" class="form-control number_list" />
                </td>  
                <td>
                    <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                </td>  
            </tr>
        </table>  
        <table class="table table-bordered" id="dynamic_field">  
            <tr>
                <td>
                    {!! Form::submit('Process',['class'=>'btn btn-info']) !!}
                </td>
            </tr>
        </table>
                
    </div>
    {!! Form::close() !!}
</div>  
@isset($res) 
<div class="container">
    <div class="row alert alert-primary">
        {!! $res !!}
    </div>
</div>  
@endisset
@endsection

@section('jquery')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
         i++;  
         $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="number" name="arr[]" placeholder="Enter a Number" class="form-control number_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
     }); 

      $(document).on('click', '.btn_remove', function(){  
         var button_id = $(this).attr("id");   
         $('#row'+button_id+'').remove();  
     });   
  });  
</script>
@endsection