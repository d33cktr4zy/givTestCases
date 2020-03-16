<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GIV Test Cases Solutions | @yield('title')</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
    @include('partials.nav')

    <div class="container">
        <section>
            @yield('content')
        </section>

        <section>
            <!-- this section is for the solution -->
            @yield('solution')
        </section>

        <section>
            <!-- this section is for the result -->
            @yield('result')
        </section>
    </div>

    <section>
        @yield('jquery')
        
        @include('partials.footer')
    </section>
</div>
</body>
</html>
