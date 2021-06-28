<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="viewportX-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">          --}}
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>    
    {{-- <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/81aa415a2b.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.navigation')
    @yield('content')
    @include('layouts.footer')
    @include('sweetalert::alert')

    <script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
      
    @yield('javascript')
</body>
</html>
</body>
</html>