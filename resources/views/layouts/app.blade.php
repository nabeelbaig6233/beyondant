<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Beyondant Login</title>
    <!-- Fav icon -->
    <link href="{{asset('assets/front/images/favicon.png')}}" rel="shortcut icon">
    <!--bootstrap css-->
    <link href="{{asset('assets/front/css/bootstrap.css')}}" rel="stylesheet" type="text/css">

    <!-- Globally css -->
    <link href="{{asset('assets/front/css/globally.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/login.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">

    @yield('pageCss')
</head>
<body>

<!-- Loader -->
<div class="loader">
    <div class="loader_div"></div>
</div>

@yield('content')

<!-- latest jquery-->
<script src="{{asset('assets/front/js/')}}/jquery-2.2.0.min.js"></script>
<script src="{{asset('assets/front/js/')}}/popper.min.js"></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/front/js/')}}/bootstrap.js"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/alert.js') }}"></script>
@if(session()->has('success'))
    <script type="text/javascript">js_success("{{ session('success') }}")</script>
@endif
@if(session()->has('error'))
    <script type="text/javascript">js_error("{{ session('error') }}")</script>
@endif

@yield('pageJs')
<!-- Custom JS Script -->
<script type="text/javascript">
    $(window).load(function () {
        // Animate loader off screen
        $(".loader").fadeOut("slow");
    });
</script>

</body>
</html>
