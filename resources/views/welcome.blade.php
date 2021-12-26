<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Al-Madina</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">

        <!-- owl carousel -->
        <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">

        <!-- Global css -->
        <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
        <!--font-awsome css  -->
        <script src="https://kit.fontawesome.com/f52205d4fa.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </head>
    <body>
        <div>
            @include('layout.header')
        </div>
        <div>
            @yield('content')
        </div>
        <div>
            @include('layout.footer')
        </div>
    </body>

    <!-- Bootstrap js -->
    <script src="{{url('js/bootstrap.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>


    <!-- owl carousel js -->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>

    <!-- Global js -->
    <script src="{{url('js/js.js')}}"></script>
</html>
