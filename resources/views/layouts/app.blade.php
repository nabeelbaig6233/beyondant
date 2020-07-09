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
    <link href="{{asset('assets/front/css/translate.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">

    @yield('pageCss')

<!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '650826172434071');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=650826172434071&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144906877-36"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-144906877-36');
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166321286-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-166321286-1');
</script>

<!-- Custom JS Script -->
<script type="text/javascript">
    $(window).load(function () {
        // Animate loader off screen
        $(".loader").fadeOut("slow");
    });
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
</body>
</html>
