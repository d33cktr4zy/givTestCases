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
		<div class="col-md-12">
			<pre class="pre-scrollable">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</pre> 
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