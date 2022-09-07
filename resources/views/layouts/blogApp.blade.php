<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Datagenius Consulting</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('blooger/css/all.css') }}">
    
    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="{{ asset('blooger/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blooger/css/owl.theme.default.min.css') }}">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="{{ asset('blooger/css/aos.css') }}">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="{{ asset('blooger/css/Style.css') }}">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div id="app">

    <main>
        @yield('content')
    </main>
</div>



<!-- -------------x------------- Footer --------------------x------------------- -->

<!-- Jquery Library file -->
<script src="{{ asset('blooger/js/Jquery3.4.1.min.js') }}"></script>

<!-- --------- Owl-Carousel js ------------------->
<script src="{{ asset('blooger/js/owl.carousel.min.js') }}"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src="{{ asset('blooger/js/aos.js') }}"></script>

<!-- Custom Javascript file -->
<script src="{{ asset('blooger/js/main.js') }}"></script>



</body>

</html>
