@extends('index')

@section('title')
    Case D - Shift
@endsection

@section('content')
    <div class="container">
        <h3 class="text-center">Case D</h3>
        <h3 class="text-center">Shift</h3>
        <div class="row col-12">
            <div class="column">
                <h4>Description</h4>
                <p>
                    <div>
                <p>Given a series of numbers, swap every two adjacent numbers and return its head. You may not modify
                    the values in the series.
                </p>
                <p>You can interpret the input as an array.</p>
            </div>
            </p>
        </div>
        <div class="column">
            <h4>Sample Input</h4>
            <p>
                <div>
                    <div class="callout">
            <p>4 =&gt; 5 =&gt; 6 =&gt; 7 =&gt; 8</p>
        </div>
    </div> </p>
    </div>
    </div>

    <div class="row col-12">
        <div class="column">
            <h4>Sample Output</h4>
            <div>
                <div class="callout">
                    <p>5 =&gt; 4 =&gt; 7 =&gt; 6 =&gt; 8</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('solution')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center">Solution</h3>
            </div>
        </div>
        <div class="row well">
            <div class="col-sm-12" style="overflow-y: scroll; height: 300px;border: solid 1px;">
            <pre>
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

            </pre>
            </div>
        </div>
    </div>
@endsection

@section('result')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center">Result testing</h3>
            </div>
        </div>

        <div class="container">
            <div class="form-horizontal">
                {!! Form::open(['action'=>'caseDController@process']) !!}
                <div class="form-group">
                    {!! Form::label('inputString', 'Please input a string containing numbers :',['class'=>'text-center'])
                     !!}
                    @empty($oldString)
                        {!! Form::text('inputString','1 I 2 got 3 accepted 4 yay 5 ! 6',['class' =>'form-control']) !!}
                    @endempty
                    @isset($oldString)
                        {!! Form::text('inputString',$oldString,['class' =>'form-control']) !!}
                    @endisset
                </div>
                <div class="form-groups">
                    {!! Form::submit('Shift Numbers!',['class'=>'btn btn-block btn-warning']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        @isset($result)
            <hr>
            <div class="container">
                <div class="col-sm-12">
                    <div class="alert alert-primary">
                        <em>{{ $result }}</em>
                    </div>
                </div>
            </div>
        @endisset

    </div>
@endsection
