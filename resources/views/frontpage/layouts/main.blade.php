<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videograph | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{template_frontpage('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{template_frontpage('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{template_frontpage('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{template_frontpage('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{template_frontpage('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{template_frontpage('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{template_frontpage('css/style.css')}}" type="text/css">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    @stack('css')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    {{-- <div id="app"> --}}
        @include('frontpage.layouts.header')
    
        @yield('content')
    
        @include('frontpage.layouts.footer')
    {{-- </div> --}}

    <!-- Js Plugins -->
    <script src="{{ asset('jquery/dist/jquery.js') }}"></script>
    <script src="{{template_frontpage('js/bootstrap.min.js')}}"></script>
    <script src="{{template_frontpage('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{template_frontpage('js/mixitup.min.js')}}"></script>
    <script src="{{template_frontpage('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{template_frontpage('js/jquery.slicknav.js')}}"></script>
    <script src="{{template_frontpage('js/owl.carousel.min.js')}}"></script>
    <script src="{{template_frontpage('js/main.js')}}"></script>

    <script src="{{asset('js/app.js')}}"></script>
    @stack('js')
</body>

</html>