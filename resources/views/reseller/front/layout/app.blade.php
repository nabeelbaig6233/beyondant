<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('assets/front/images/favicon.png')}}">
    <link href="{{asset('assets/front/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet"  href="{{asset('assets/front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('css/alert.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="{{asset('assets/front/css/translate.css')}}" rel="stylesheet" type="text/css">
    @yield('pageCss')
</head>
<body>
    @yield('content')

<script type="text/javascript" src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/alert.js')}}"></script>
@if(session()->has('success')) <script type="text/javascript">js_success({{session()->get('success')}})</script>
@elseif(session()->has('error'))<script type="text/javascript">js_error({{session()->get('error')}})</script>@endif
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
</script>
@yield('pageJs')

</body>
</html>
