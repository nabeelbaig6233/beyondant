@extends('reseller.front.layout.app')
@section('title') Reseller Profile @endsection
@section('pageCss')
<link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/reseller/front/css/profile.css')}}">
@endsection
{{--Content--}}
@section('content')
<div class="container-fluid asd">
{{--    Header --}}
    <div class="row header">
{{-- Language Selection --}}
           <div class="offset-lg-1 col-lg-2">
                <div class="language"><i class="fa fa-globe"></i> <p id="google_translate_element" class="translate"></p></div>
            </div>
{{-- End Language Selection --}}
{{-- Authorized Reseller Column--}}
           <div class="offset-lg-3 col-lg-6 pt-3">
                <div class="authorized-reseller">
                        <img src="{{asset('assets/reseller/front/images/profile.jpg')}}">
                    <div class="contact ml-3">
                        <p>
                            <strong>{{ucfirst($reseller->f_name)." ".ucfirst($reseller->l_name)}}</strong>
                           <br/> Authorized Reseller
                        </p>
                        <a href="#">Contact</a>
                    </div>
                    <div class="ml-3">
                        <a class="btn btn-danger button-red text-white"><span class="ml-3 font-weight-bold">Why Beyondant</span></a>
                        <a href="https://beyondant-products.com/collections/all?discount={{$reseller->discount_code}}" class="btn btn-light button-white text-dark"><span class="ml-3">Shop Devices</span></a>
                    </div>
                </div>
           </div>
{{-- End Authorized Reseller Column--}}
    </div>
{{--    Header End's   --}}
{{-- Navbar --}}
    <div class="row">
        <div class="offset-lg-1 col-lg-10 navbar-section">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><img src="{{asset('assets/reseller/front/images/logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Shop Devices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Start a Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Why Beyondant</a>
                        </li>
                    </ul>
                </div>
                <span class="navbar-text text-white">
                      <i class="fa fa-phone p-2 mr-2"></i>{{$reseller->business_phone}}
                    </span>
            </nav>
        </div>
    </div>
{{--  Navbar End's --}}
{{-- Slider --}}
    <div class="row">
        <div class="col-12 p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="overlay"></div>
                    <img class="img-fluid" src="{{asset('assets/reseller/front/images/slider.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <h1 class="display-1 text-uppercase">Let’s Put In The Work & Build Business Success!</h1>
                        <div class="carousel-caption-buttons">
                            <a class="btn button-red font-weight-bold" href="#">
                                <span class="pl-2 pr-2">Join Free</span>
                            </a>
                            <a class="btn button-blue" href="#">
                                <span class="pl-4 pr-4">Log In</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay"></div>
                    <img class="img-fluid" src="{{asset('assets/reseller/front/images/slider.jpg')}}" alt="Second slide">
                    <div class="carousel-caption">
                        <h1 class="display-1 text-uppercase">Let’s Put In The Work & Build Business Success!</h1>
                        <div class="carousel-caption-buttons">
                            <a class="btn button-red font-weight-bold" href="#">
                                <span class="pl-2 pr-2">Join Free</span>
                            </a>
                            <a class="btn button-blue" href="#">
                                <span class="pl-4 pr-4">Log In</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay"></div>
                    <img class="img-fluid" src="{{asset('assets/reseller/front/images/slider.jpg')}}" alt="Third slide">
                    <div class="carousel-caption">
                        <h1 class="display-1 text-uppercase">Let’s Put In The Work & Build Business Success!</h1>
                        <div class="carousel-caption-buttons">
                            <a class="btn button-red font-weight-bold" href="#">
                                <span class="pl-2 pr-2">Join Free</span>
                            </a>
                            <a class="btn button-blue" href="#">
                                <span class="pl-4 pr-4">Log In</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </div>
{{--  Slider End's  --}}
{{--  Quick Links  --}}
    <div class="row quick-links-section">
        <span class="w-100 bg-white divider-white"></span>
        <div class="col-12 p-0">
            <div class="links-section" style="background-image: url('{{asset('assets/reseller/front/images/quick-links-back.png')}}');">
                <div class="row col-xl-10 offset-xl-1 col-lg-12">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <h1 class="link-heading">About</h1>
                        <ul class="quick-box">
                            <li><a href="">Why Beyondant</a></li>
                            <li><a href="">Executive Team</a></li>
                            <li><a href="">Beyondant Foundation</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Press</a></li>
                        </ul>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <h1 class="link-heading">Opportunity</h1>
                        <ul class="quick-box">
                            <li><a href="">Start a Business</a></li>
                            <li><a href="">Events</a></li>
                            <li><a href="">Currents</a></li>
                            <li><a href="">Top Leaders</a></li>
                            <li><a href="">Beyondant Central</a></li>
                            <li><a href="">Beyondant Store</a></li>
                        </ul>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <h1 class="link-heading">Product</h1>
                        <ul class="quick-box">
                            <li><a href="">Energy</a></li>
                            <li><a href="">Wireless</a></li>
                            <li><a href="">Protective</a></li>
                        </ul>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <h1 class="link-heading">Support</h1>
                        <ul class="quick-box">
                            <li><a href="">Contacts</a></li>
                            <li><a href="">FAQ's</a></li>
                        </ul>
                        <div class="email-subsec">
                            <img src="{{asset('assets/reseller/front/images/email-marketing.png')}}">
                            <p class="email">Info@Beyondant.com</p>
                            <p class="phone-number">908.242.3056</p>
                        </div>
                        <div class="follow-us-subsec">
                            <p>Follow Us On</p>
                            <ul>
                                <li><a href=""><i class="fa fa-vimeo"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
{{--  Quick Links End  --}}
{{--  Footer  --}}
    <div class="row footer">
            <div class="offset-md-1 col-md-3 col-sm-12">
                <img src="{{asset('assets/reseller/front/images/logo.png')}}">
            </div>
            <div class="offset-md-4 col-md-4 col-sm-12">
                <p class="footer-content">Copyright &copy; 2020 Beyondant | All Rights Reserved</p>
            </div>
    </div>
    <style>
    @media (max-width:767px){
        .header .language {
    text-align: right;
}
.header .authorized-reseller {
    display: inline-block;
}
.header .authorized-reseller {
    display: inline-block;
    text-align: center;
}
.header .authorized-reseller a.btn.btn-light,
.header .button-red{
    width: 100%;
    margin: 10px 0;
}
.navbar-section {
    padding: 0px 0px 25px 0px;
    background-color: #08325a;
    border-bottom: 10px solid #bd1e2c;
    position: relative;
    z-index: 3;
    margin-top: 0%;
}
.carousel .carousel-control-next, .carousel-control-prev {
    width: 5%;
    opacity: 1;
}
.carousel-caption-buttons {
    display: none;
}
.carousel-inner .carousel-caption {
    justify-content: center;
    align-items: center;
    top: 30%;
    padding: 10px;
    width: 75%;
}
.header {
    height: 100%;
}
.display-1 {
    font-size: 1rem;
}
.links-section h1.link-heading {
    font-size: 30px;
}        
}
</style>
{{--  Footer End's  --}}
</div>
@endsection
{{--End Content--}}
@section('pageJs')
@endsection
