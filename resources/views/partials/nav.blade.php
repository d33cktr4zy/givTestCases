<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="../images/me.jpg" class="rounded-circle img-fluid" alt="Placeholder image" width="50">
    <a class="navbar-brand" href="{{ route('home')}}">Gabriel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Answers</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('showCaseA') }}">Case A</a>
                    <a class="dropdown-item" href="{{ route('showCaseB') }}">Case B</a>
                    <a class="dropdown-item" href="{{route('showCaseC')}}">Case C</a>
                    <a class="dropdown-item" href="{{route('showCaseD')}}">Case D</a>
                    <a class="dropdown-item" href="{{route('showCaseE')}}">Case E</a>
                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('showAbout') }}">About Me</a>
            </li>

        </ul>
    </div>
</nav>
