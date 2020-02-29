<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Beyondant" name="description">
    <meta content="Beyondant" name="keywords">
    <meta content="Beyondant" name="author">
    <title>Beyondant</title>

    <!-- Fav icon -->
    <link href="{{asset('assets/front/images/')}}/favicon.png" rel="shortcut icon">
    <!-- Animate -->
    <link href="{{asset('assets/front/css/animate.css')}}" rel="stylesheet" type="text/css">
    <!--bootstrap css-->
    <link href="{{asset('assets/front/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <!-- Globally css -->
    <link href="{{asset('assets/front/css/globally.css')}}" rel="stylesheet" type="text/css">
    @yield('pageCss')


</head>
<body data-offset="80" data-spy="scroll" data-target=".navbar">
@yield('content')
<!-- latest jquery-->
<script src="{{asset('assets/front/js/')}}/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets/front/js/')}}/popper.min.js"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/front/js/')}}/bootstrap.js"></script>
<!--owl js-->
<script src="{{asset('assets/front/js/')}}/owl.carousel.min.js"></script>
<!-- tween max animation -->
<script src="{{asset('assets/front/js/')}}/TweenMax.min.js"></script>
<!-- wow animation -->
<script src="{{asset('assets/front/js/')}}/wow.js"></script>
@yield('pageJs')
</body>
</html>
