<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Beyondant" name="description">
    <meta content="Beyondant" name="keywords">
    <meta content="Beyondant" name="author">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $setting->title ?? '' }}</title>

    <!-- Fav icon -->
    <link href="{{asset( $setting->favico ?? '' )}}" rel="shortcut icon">
    <!-- Animate -->
    <link href="{{asset('assets/front/css/animate.css')}}" rel="stylesheet" type="text/css">
    <!--bootstrap css-->
    <link href="{{asset('assets/front/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <!-- Globally css -->
    <link href="{{asset('assets/front/css/globally.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
    @yield('pageCss')


</head>
<body>
@yield('content')
<!-- latest jquery-->
<script src="{{asset('assets/front/js/')}}/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets/front/js/')}}/popper.min.js"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/front/js/')}}/bootstrap.js"></script>
<!-- tween max animation -->
<script src="{{asset('assets/front/js/')}}/TweenMax.min.js"></script>
<!-- wow animation -->
<script src="{{asset('assets/front/js/')}}/wow.js"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/alert.js') }}"></script>
@if(session()->has('success'))
    <script type="text/javascript">js_success("{{ session('success') }}")</script>
@endif
@if(session()->has('error'))
    <script type="text/javascript">js_error("{{ session('error') }}")</script>
@endif
@yield('pageJs')
</body>
</html>
