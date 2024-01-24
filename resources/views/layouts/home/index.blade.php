<html>

<head>
    <title>PRG Projects - @yield('title')</title>
    <meta charset="utf-8">

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/" href={{ asset('images/favicon.ico') }}>
    <link rel="apple-touch-icon" sizes="57x57" href={{asset("images/apple-icon-57x57.png")}}>
    <link rel="apple-touch-icon" sizes="60x60" href={{asset("images/apple-icon-60x60.png")}}>
    <link rel="apple-touch-icon" sizes="72x72" href={{asset("images/apple-icon-72x72.png")}}>
    <link rel="apple-touch-icon" sizes="76x76" href={{asset("images/apple-icon-76x76.png")}}>
    <link rel="apple-touch-icon" sizes="114x114" href={{asset("images/apple-icon-114x114.png")}}>
    <link rel="apple-touch-icon" sizes="120x120" href={{asset("images/apple-icon-120x120.png")}}>
    <link rel="apple-touch-icon" sizes="144x144" href={{asset("images/apple-icon-144x144.png")}}>
    <link rel="apple-touch-icon" sizes="152x152" href={{asset("images/apple-icon-152x152.png")}}>
    <link rel="apple-touch-icon" sizes="180x180" href={{asset("images/apple-icon-180x180.png")}}>
    <link rel="icon" type="image/png" sizes="192x192" href={{asset("images/android-icon-192x192.png")}}>
    <link rel="icon" type="image/png" sizes="32x32" href={{asset("images/favicon-32x32.png")}}>
    <link rel="icon" type="image/png" sizes="96x96" href={{asset("images/favicon-96x96.png")}}>
    <link rel="icon" type="image/png" sizes="16x16" href={{asset("images/favicon-16x16.png")}}>
    <link rel="manifest" href={{asset("images/manifest.json")}}>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href={{ asset('plugins/bootstrap/bootstrap.min.css') }}>
    <!-- FontAwesome -->
    <link rel="stylesheet" href={{ asset('plugins/fontawesome/css/all.min.css') }}>
    <!-- Animation -->
    <link rel="stylesheet" href={{ asset('plugins/animate-css/animate.css') }}>
    <!-- slick Carousel -->
    <link rel="stylesheet" href={{ asset('plugins/slick/slick.css') }}>
    <link rel="stylesheet" href={{ asset('plugins/slick/slick-theme.css') }}>
    <!-- Colorbox -->
    <link rel="stylesheet" href={{ asset('plugins/colorbox/colorbox.css') }}>
    <!-- Template styles-->
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

    <style>
        .mt-0 {
            margin-top: 0px !important;
        }
    </style>
    @section('styles')
    @show
</head>

<body>

    <div class="body-inner">
        {{-- @include('layouts.home.components.top-header') --}}
        @include('layouts.home.components.header')
        @yield('content')
        @include('layouts.home.components.footer')
    </div>



    <!-- jQuery -->
    <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}" defer></script>

    <!-- Slick Carousel -->
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/slick/slick-animation.min.js') }}"></script>

    <!-- Color box -->
    <script src="{{ asset('plugins/colorbox/jquery.colorbox.js') }}"></script>

    <!-- Shuffle -->
    <script src="{{ asset('plugins/shuffle/shuffle.min.js') }}" defer></script>



    <!-- Google Map API Key-->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script> --}}
    <!-- Google Map Plugin-->
    {{-- <script src={{ asset('plugins/google-map/map.js') }} defer></script> --}}

    <!-- Template custom -->
    <script src={{ asset('js/script.js') }}></script>

    @section('scripts')
    @show


</body>

</html>
