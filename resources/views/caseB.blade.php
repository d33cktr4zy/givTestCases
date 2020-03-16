@extends('index')

@section('title')
Case B - Lucky 7
@endsection

@section('content')
<div class="container"> 
	<div class="row">
		<div class="col-12">
			<h3 class="text-center">Case B</h3> 
		</div>
		<div class="col-12">
			<h3 class="text-center">Lucky 7</h3> 
		</div>
	</div>
	<div class="row"> 
		<div class="col-12"> 
			<h4>Description</h4> 
		</div>
		<div class="col-12">
			<p>
				It can be proved that for all N ≥ 7, there exists at least an array A which satisfies the following conditions:
			</p>
		</div class="col-12">
		<ul> 
			<li>All elements of A are positive integers.</li>                             

			<li>The sum of all elements of A is N.</li>                             

			<li>A is sorted in non-decreasing order.</li>
			<li>If K is the length of A, then AK - A1 = 1.</li>

		</ul>
		<div class="col-12">
			Given N, output any array A that satisfies the conditions.
			<br>
		</div>
	</div>  
	<div class="row col-12"> 
		<div class="col-12"> 
			<h4>Input Format</h4> 
			<p> <div> 
				<p>The input is given in the following format:</p> 
				<div class="alert alert-dark">
					<b>N</b>
				</div>
			</div> </p>
		</div>                 

		<h2></h2>
	</div>             

	<div class="row col-12"> 
		<div class="col-12"> 
			<h4>Output Format</h4> 
			<p> <div> 
				<p>The first line is a single integer K denoting the length of A.</p>
			</div><div> 
				<p>The second line is K integers denoting A1, A2, ..., AK.</p>
			</div> </p>
		</div>                 

		<h2></h2>
	</div>             

	<div class="row col-12"> 
		<div class="col-12"> 
			<h4>Sample Input</h4> 
			<div> 
				<div class="alert alert-dark alert-sm" role='alert'> 
					<p>7</p>
				</div>
			</div>
		</div>                 

		<h2></h2>
	</div>             

	<div class="row col-12"> 
		<div class="col-12"> 
			<h4>Sample Output</h4> 
			<p> <div> 
				<div class="alert alert-dark"> 
					<div> 
						<p>&nbsp;2</p>
					</div>
					<div> 
						<p>&nbsp;3 4</p>
					</div>
				</div>
			</div> </p>
		</div>
	</div>
	<div class="row col-12"> 
		<div class="col-12"> 
			<h4>Explaination of Sample</h4> 
			<p> <div> 
				<p>One of other possible output that satisfies the rules is:</p> 
				<div class="alert alert-dark">
					<p>3</p>
					<p>2 &nbsp;2 &nbsp;3</p>
				</div>
			</div> </p>
		</div>                 

		<h2></h2>
	</div>
	<div class="row col-12"> 
		<div class="col-12"> 
			<h4>Constraints</h4> 
			<p> <div> 
				<b>7 ≤ N ≤ 10,000</b>
			</div> </p>
		</div>                 

		<h2></h2>
	</div>
</div>

</div>           
@endsection

@section('solution')

@endsection

@section('result')

@endsection
