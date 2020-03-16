@extends('index')

@section('title')
    Case E - Sum Two Number
@endsection

@section('content')

    <h3 class="text-center">Case E</h3>
    <h3 class="text-center">Sum Two Number</h3>
    <div class="row col-12">
        <div class="column">
            <h4>Description</h4>
            <div>
                <p>
                    Add two number from 2 two non-negative integers, The numbers is stored in reverse order and
                    return it in
                    reverse pattern. Based on the first understanding, this can simply be done by reversing the
                    integer
                    as
                    string. However, write the pseudo-code to solve this problem based on your own algorithm.
                </p>
            </div>
        </div>
    </div>
    <div class="column">
        <h4>Sample Input</h4>
        <div class="callout">
            <p>243 + 564</p>
        </div>
    </div>

    <div class="row col-12">
        <div class="column">
            <h4>Sample Output</h4>
            <div>
                <div class="callout">
                    <p>708</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row col-12">
        <div class="column">
            <h4>Explaination:</h4>
            <div>
                <div class="callout">
                    <p>342 + 465 = 807</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('solution')
    <div class="container">
        <div>
            <h3 class="text-center">Solution</h3>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
               <pre>
public function sumTwoNumber($a,$b)
   {
    $a= $this->reverse($a);
    $b= $this->reverse($b);

    $c= $a + $b;

    $c= $this->reverse($c);
    return $c;
}
               </pre>
            </div>
            <div class="col-sm-6 col-xs-12">
                <pre>
public function reverse($num){
    $rev = 0;
    while($num != 0){
    $rev = ($rev*10) + ($num%10);
    $num = (int)($num/10);
    };
    return $rev;
}
                </pre>
            </div>
        </div>
    </div>

@endsection

@section('result')
    <div class="container">
        <h3 class="text-center">Result</h3>
        <div class="container">
            {!! Form::open(['action' => 'caseEController@process','class' =>'form-inline'])  !!}
            <div class="form-group col-12">
                <div class="col-5">
                    <label for="numberOne" class="control-label">First Number :</label>
                    @empty($oldOne)
                        {!! Form::number('numberOne','243',array_merge(['id'=>'numberOne','class'=>'form-control'])) !!}
                    @endempty
                    @isset($oldOne)
                        {!! Form::number('numberOne',$oldOne,array_merge(['id'=>'numberOne','class'=>'form-control'])) !!}
                    @endisset
                </div>
                <div class="col-2"> +</div>
                <div class="col-5">
                    <label for="numberTwo" class="control-label">Second Number :</label>
                    @empty($oldTwo)
                        {!! Form::number('numberTwo','564',array_merge(['id'=> 'numberTwo','class'=>
                    'form-control'])) !!}
                    @endempty
                    @isset($oldTwo)
                        {!! Form::number('numberTwo',$oldTwo,array_merge(['id'=> 'numberTwo','class'=>
                        'form-control'])) !!}
                    @endisset
                </div>
                <div class="col-12 text-center">
                    {!! Form::submit('Get Result!',array_merge(['class'=>'btn btn-primary btn-lg btn-block'])) !!}
                </div>
            </div>
            {!! Form::close() !!}

        </div>
        @isset($result)
            <div class="container col-12 highlight">
                <h2 class="text-center">{{ $result }}</h2>
                <h5 class="text-center">Because:</h5>
                <p class="text-center"> {{ $because }}</p>
            </div>
        @endisset
        <div class="row col-12">
            <div class="column">

            </div>
        </div>
    </div>
@endsection
