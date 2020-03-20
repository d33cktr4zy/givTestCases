@extends('index')

@section('title')
Case Web Imp
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Problem</h3>
			<p>Given These Array :</p>
			<p>A: [68168, 87954, 32158, 8774]</p>
			<p>B: [5408, 6604, 32158, 84984, 8774, 34871]</p>
			<p>Please Define:</p>
			<ol>
				<li>Write a function that returns an array of common numbers from each array: [32158, 8774]</li>
				<li>Write a function that returns the N-th smallest number from an array input</li>
			</ol>
		</div>
	</div>
	<hr />
</div>


@endsection

@section('solution')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">Solution</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="height: 300px; overflow-y: scroll">
			<pre class="pre-scrollable">
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
            </pre>
		</div>
	</div>
	<hr />
</div>
@endsection


@section('result')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">Result test</h3>
			<p>Solution No. 1</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>The common number from both array are:

				[
				@foreach($num as $k=>$a)

					{{$a . ', ' }}

				@endforeach
				]
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>No2</h3>
			{!! Form::open(['action'=>'caseImpControllers@process']) !!}
				<div class="form-group">
					<label class="control-label" for="nth">Please input the N-th value</label>
					<input type="number" class="form-control" id="nth" name="nth" placeholder="">
				</div>
				<button type="submit" class="btn btn-block btn-primary">Submit</button>
			{!! Form::close() !!}
		</div>
	</div>
	@isset($nth)
	<div class="row">
		<div class="col-md-12 alert alert-primary">
			<h3 class="text-center">The N-Th smallest Is : {{$nth}}</h3>
		</div>
	</div>
	@endisset
</div>
@endsection
