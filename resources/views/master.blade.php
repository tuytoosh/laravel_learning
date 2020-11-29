<html lang="fa">
    <head>
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

        @yield('style')
    </head>

    <body>
        <div class="container mt-5">
            <a href="{{ url('/') }}">Home</a> |
            <a href="{{ url('about') }}">About</a> |
            <a href="{{ url('car') }}">Car</a>

            @yield('content')
        </div>

        @yield('script')
    </body>
</html>
