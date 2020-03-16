@extends('index')

@section('content')
<div class="jumbotron text-center mt-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>GIV TEST CASES</h1>
                <p>This pages was created to simulate the Cases that has been given to me to fulfll the application for Back End Developer position in <a href="https://adeptforms.com">adeptforms.com</a>&nbsp;</p>
                <p>This sites are intentionally delivered as plain as it is only to showcase the solution that I provided to the cases at hand.</p>
                <p>This solution will be based mostly in PHP and SQL. You may download the solution by clonning my
                    git <a href="https://github.com/d33cktr4zy/givTestCases">HERE</a></p>
                <p><a class="btn btn-primary btn-lg" href="{{ route('showCaseA')  }}" role="button">Start Viewing
                        Answers »</a></p>
            </div>
        </div>
    </div>
</div>

@endsection
