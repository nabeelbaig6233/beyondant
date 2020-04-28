@extends('front.layout.app')
@section('pageCss')
    <!-- Custom css -->
    <link href="{{asset('assets/front/css/home.css')}}" rel="stylesheet" type="text/css">
    <!--owl carousel css-->
    <link href="{{asset('assets/front/css/')}}/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('assets/front/css/')}}/owl.theme.default.min.css" rel="stylesheet">
@endsection
@section('content')
    <!-- Nav Start -->
    <header id="header-section" class="sticky-header clearfix cursor-light custom-scroll">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <a class="d-inline-block m-r-auto" href="{{ url('/') }}">
                            <img alt="" class="img-fluid img-fluidw70 m-t-10 m-b-10 link linkNav" src="{{asset($setting->logo??'')}}">
                        </a>

                        <div class="navbar m-l-auto">
                            <ul class="">
                                <li><i class="fas fa-phone-volume"></i> {{ $setting->phone ?? '' }} <span class="lineSep">|</span></li>
                                @guest
                                    <li><a href="{{route('login')}}" class="link linkNav">LOGIN</a></li>
                                @else
                                    <li><a href="{{route('pro',auth()->user()->id)}}" class="link linkNav">View Profile</a></li>
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="link linkNav">Logout</a></li>
                                    <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">@csrf</form>
                                @endguest
                                <a class="btn btn-default buyNow link" href="https://beyondant-products.com/collections/all">Buy Now</a>
                            </ul>
                        </div>

                    </nav>


                    <!-- <a id="close_side_menu" href="javascript:void(0);"></a> -->
                </div>

            </div>

        </div>
    </header>
    <!-- Nav End -->

    <!-- Main Header Start -->
    <section class="beyondantMainhead header cursor-light">
        <div class="beyondantMainhead-content ">
            <div class="bg beyondant-bg">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-7">
                            <div class="center-text">

                                <div class="">
                                    <div class="navbarMob">
                                        <ul class="text-center">
                                            <li><i class="fas fa-phone-volume"></i> {{ $setting->phone ?? '' }} <span class="lineSep">|</span></li>
                                            @guest
                                                <li><a href="{{route('login')}}" class="link linkNav">LOGIN</a></li>
                                            @else
                                                <li><a href="{{route('pro',auth()->user()->id)}}" class="link linkNav">View Profile</a></li>
                                                <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-forms').submit();" class="link linkNav">LOGOUT</a></li>
                                                <form id="logout-forms" action="{{route('logout')}}" method="post" style="display: none">@csrf</form>
                                            @endguest
                                            <a class="btn btn-default buyNow link" href="https://beyondant-products.com/collections/all">Buy Now</a>
                                        </ul>
                                    </div>

                                    <div class="header-text">
                                        <h2 class="headtop">SEE ME | SCAN ME</h2>
                                        <h1 class="mainheadtop wow fadeInLeft link">{{ $home->heading1 ?? '' }}</h1>
                                    </div>
                                    <div class="wow fadeInRight link">
                                        <p>{{ $home->text1 ?? '' }} </p>
                                    </div>
                                    <div class="wow fadeInDown m-b-40 m-t-40">
                                        <a class="btn btn-default watchVideo link" href="#myModal" data-toggle="modal">
                                            <i class="far fa-play-circle"></i> Watch Video</a>

                                        @guest
                                            <button type="button" class="btn btn-default transparent registerNow link" data-toggle="modal" data-target="#selectionmodal">
                                                Register Now For Free
                                            </button>
                                        @else
                                            <a class="btn btn-default transparent registerNow link" href="{{route('pro',auth()->user()->id)}}">View Profile</a>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="center-text set-abs">
                            <img alt="" class="img-fluid img-dextop link wow fadeInRight" src="{{asset('assets/front/images/')}}/mobile-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--Modal For Selection--}}

    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="selectionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>What type of profile are you creating today?</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route("account_select")}}" >
                <div class="modal-body">

                        {{csrf_field()}}
                        <div class="form-check form-check-inline p-3">
                            <input type="radio" class="form-check-input" name="account_type" value="personal" checked />
                            <label class="form-check-label" >Personal Account</label>
                            <input type="radio" name="account_type" class="form-check-input ml-2" value="company" />
                            <label class="form-check-label">Company Account</label>
                        </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn transparent btn-danger pl-5 pr-5" style="background-color: #be0103" value="Continue" />
{{--                    <button type="button" form="type" class="btn transparent btn-danger pl-5 pr-5" style="background-color: #be0103">Continue</button>--}}
{{--                    <a class="btn transparent btn-danger " style="background-color: #be0103" href="{{route('register')}}">Continue</a>--}}
                </div>
                </form>
            </div>
        </div>
    </div>


    {{--Modal selection ends--}}

    <!-- Main Header End -->
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <iframe id="Vids" width="100%" height="315" src="{{ $home->iframe  }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


    <!-- Grow Your Business Start -->
    <section class="growYourBusiness-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title">
                        <div class="main-title">
                            <h2 class="wow fadeInDown">{{ $home->heading2 ?? '' }}</span></h2>
                            <img src="{{asset('assets/front/images/')}}/red-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                            <p class="wow fadeInRight">{{ $home->text2 ?? '' }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container wow fadeInUp">
            <div class="slider-container">
                <div class="owl-carousel owl-theme" id="business_slider">
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-1.png">
                        <h3>{{ $home->section_heading1 ?? '' }}</h3>
                        <p>{{ $home->section_text1 ?? '' }} </p>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-2.png">
                        <h3>{{ $home->section_heading2 ?? '' }}</h3>
                        <p>{{ $home->section_text2 ?? '' }}</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-3.png">
                        <h3>{{ $home->section_heading3 ?? '' }}</h3>
                        <p>{{ $home->section_text3 ?? '' }}</p>
                    </div>


                </div>
            </div>
        </div>
        <div class="container wow fadeInLeft text-center">
            <h4 class="babr"><a href="{{ route('reseller') }}" title="Instagram" class="link">Become An Authorized Reseller <span>Click here to Apply</span></a></h4>
        </div>
    </section>
    <!-- Grow Your Business End -->


    <!-- Our Products Start -->
    <div class="ourProducts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset( $home->section_image4 ?? '' )}}" class="pro_img ">
                </div>
                <div class="col-lg-6">
                    <h2 class="wow fadeInLeft">{{ $home->section_heading4 ?? '' }}</h2>
                    <img src="{{asset('assets/front/images/')}}/white-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                    <p class="wow fadeInRight">{{ $home->section_text4 ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Products End -->


    <!-- Create Design Start -->
    <div class="createDesign">
        <div class="container-fluid paddLR">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="createDesign_text">
                        <h2 class="wow fadeInLeft"> {{ $home->section_heading5 ?? '' }}</h2>
                        <img src="{{asset('assets/front/images/')}}/red-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                        <p class="wow fadeInRight">{{ $home->section_text5 ?? '' }}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="createDesign_img" style="background-image: url('{{ $home->section_image5 ?? '' }}')"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Design End -->


    <!-- Stay Connected Start -->
    <div class="stayConnected text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="wow fadeInLeft">Stay Connected</h2>
                    <img src="{{asset('assets/front/images/')}}/white-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                    <p class="wow fadeInRight">Subscribe to our newsletter for Updates & Offers</p>

                    <form  class="wow fadeInDown" method="post" action="{{route("subscribe")}}">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required="">

                            <span class="input-group-btn">
                            <input type="submit" class="btn btn-default subscribe" value="Subscribe">

                        </span>
                        </div>
                        <div class="pt-4">
                            @error("email")
                                <h4 class="text-danger">{{$message}}</h4>
                            @enderror

                            @if (session("subscribed"))
                                    <h4 class="text-success">{{session("subscribed")}}</h4>

                            @endif
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
    <!-- Stay Connected End -->

    <!-- Footer Start -->
    <footer class="bayondantFooter cursor-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <h2 class="wow fadeInLeft">Affiliates
                            <br/>
                            <a href="{{route('entrepreneurs')}}" style="color: white;font-size: 18px;font-family: 'Source Sans Pro',sans-serif">Application</a>
                        </h2>

                    </div>
                    <h2 class="wow fadeInLeft">Contact Us</h2>
                    <form class="wow fadeInDown">
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="" rows="5" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default submitBtn link">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6 ">
                    <img alt="" class="wow fadeInRight" src="{{asset( $setting->logo ?? '' )}}">
                    <p class="wow fadeInRight">{{ $setting->footer_text ?? '' }} </p>
                    <img alt="" class="wow fadeInRight m-t-40" src="{{asset('assets/front/images/')}}/email-icon.png">
                    <p class="wow fadeInRight contactDetails">{{ $setting->email ?? '' }} <span>{{ $setting->phone ?? '' }}</span></p>
                    <p class="wow fadeInRight contactDetails">{{ $setting->address ?? '' }}</p>
                    <h5 class="wow fadeInDown">Follow Us On</h5>
                    <a href="{{ $setting->instagram ?? '' }}" title="Instagram" class="link"> <img src="{{asset('assets/front/images/')}}/instagram-icon-3d.png" title="Instagramm"></a>
                    <a href="{{ $setting->linkedin ?? '' }}" title="Linkedin" class="link"> <img src="{{asset('assets/front/images/')}}/linkedin-icon-3d.png" title="Linkedin"></a>
                    <a href="{{ $setting->facebook ?? '' }}" title="Facebook" class="link"> <img src="{{asset('assets/front/images/')}}/facebook-icon-3d.png" title="Facebook"></a>
                    <a href="{{ $setting->tiktok ?? '' }}" title="Tiktok" class="link"> <img src="{{asset('assets/front/images/')}}/tiktok-icon-3d.png" title="Tiktok"></a>
                    <p class="wow fadeInRight copyright">Copyright © 2020 Beyondant | All Rights Reserved - Powered by Beyondant</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <!-- Animated Cursor Start -->
    <div id="aimated-cursor">
        <div id="cursor">
            <div id="cursor-loader"></div>
        </div>
    </div>
    <!-- Animated Cursor End -->

    <!-- Tap On Top Start -->
    <div class="tap-top">
        <i class="fa fa-chevron-up"></i>
    </div>
    <!-- Tap On Top Ends -->
@endsection
@section('pageJs')
    <!--owl js-->
    <script src="{{asset('assets/front/js/')}}/owl.carousel.min.js"></script>
    <!-- script js-->
    <script src="{{asset('assets/front/js/')}}/main.js"></script>
    <script>
        $(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#Vids").attr('src');

    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#Vids").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#Vids").attr('src', url);
    });
});
    </script>
@endsection
