<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="viewportX-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <script src="https://kit.fontawesome.com/81aa415a2b.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.navigation')
    @yield('content')
    @include('layouts.footer')
</body>
</html>