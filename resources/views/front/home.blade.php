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
                        <a class="d-inline-block m-r-auto" href="index.html">
                            <img alt="" class="img-fluid img-fluidw70 m-t-10 m-b-10 link linkNav" src="{{asset('assets/front/images/')}}/logo.png">
                        </a>
                        <!-- <div class="responsive-btn">
                            <a class="toggle-nav" href="JavaScript:void(0);">
                                <i aria-hidden="true" class="fa fa-bars text-white"></i>
                            </a>
                        </div> -->
                        <div class="navbar m-l-auto">
                            <ul class="">
                                <li><i class="fas fa-phone-volume"></i> 1 800 970-5877 <span class="lineSep">|</span></li>
                                @guest
                                    <li><a href="{{route('login')}}" class="link linkNav">LOGIN</a></li>
                                @else
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="link linkNav">Logout</a></li>
                                    <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">@csrf</form>
                                @endguest
                                <a class="btn btn-default buyNow link" href="javascript:void(0);">Buy Now</a>
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
                                            <li><i class="fas fa-phone-volume"></i> 1 800 970-5877 <span class="lineSep">|</span></li>
                                            <li><a href="JavaScript:void(0);" class="link linkNav">LOGIN</a></li>
                                            <a class="btn btn-default buyNow link" href="javascript:void(0);">Buy Now</a>
                                        </ul>
                                    </div>
                                    <div class="header-text">
                                        <h1 class="mainheadtop wow fadeInLeft link">Digital Business Cards, Profile Sharing Bracelets & More</h1>
                                    </div>
                                    <div class="wow fadeInRight link">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nihil tenetur minus quidem est deserunt molestias accusamus harum ullam tempore debitis et, expedita, repellat delectus aspernatur neque itaque qui quod.</p>
                                    </div>
                                    <div class="wow fadeInDown m-b-40 m-t-40">
                                        <a class="btn btn-default watchVideo link" href="javascript:void(0);">
                                            <i class="far fa-play-circle"></i> Watch Video</a>
                                        <a class="btn btn-default transparent registerNow link" href="{{route('register')}}">Register Now</a>
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
    <!-- Main Header End -->


    <!-- Grow Your Business Start -->
    <section class="growYourBusiness-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title">
                        <div class="main-title">
                            <h2 class="wow fadeInDown">A Smoother Way To Grow Your Business <span>Through Networking or Simply Grow Your Social Following</span></h2>
                            <img src="{{asset('assets/front/images/')}}/red-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                            <p class="wow fadeInRight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
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
                        <h3>Beyondant will save you time and money</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-2.png">
                        <h3>Target leads more efficiently</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-3.png">
                        <h3>Export your contacts to any CRM</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-1.png">
                        <h3>Beyondant will save you time and money</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-2.png">
                        <h3>Target leads more efficiently</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-3.png">
                        <h3>Export your contacts to any CRM</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-1.png">
                        <h3>Beyondant will save you time and money</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-2.png">
                        <h3>Target leads more efficiently</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/')}}/b-icon-3.png">
                        <h3>Export your contacts to any CRM</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="container wow fadeInLeft text-center">
            <h4 class="babr">Become An Authorize <span>Beyondant Reseller</span></h4>
        </div>
    </section>
    <!-- Grow Your Business End -->


    <!-- Our Products Start -->
    <div class="ourProducts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('assets/front/images/')}}/our-product-img.png" class="pro_img ">
                </div>
                <div class="col-lg-6">
                    <h2 class="wow fadeInLeft">Our Products</h2>
                    <img src="{{asset('assets/front/images/')}}/white-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                    <p class="wow fadeInRight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                        <h2 class="wow fadeInLeft">Design your first <span>digital business card</span> in seconds.</h2>
                        <img src="{{asset('assets/front/images/')}}/red-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                        <p class="wow fadeInRight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="createDesign_img"></div>
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
                    <form class="wow fadeInDown">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Address" required="">
                            <span class="input-group-btn">
                            <input type="submit" class="btn btn-default subscribe" value="Subscribe">
                        </span>
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
                    <img alt="" class="wow fadeInRight" src="{{asset('assets/front/images/')}}/logo.png">
                    <p class="wow fadeInRight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                    <img alt="" class="wow fadeInRight m-t-40" src="{{asset('assets/front/images/')}}/email-icon.png">
                    <p class="wow fadeInRight contactDetails">info@colossusmedigroup.com <span>908.242.3056</span></p>
                    <h5 class="wow fadeInDown">Follow Us On</h5>
                    <a href="javascript:void(0);" title="Instagram" class="link"> <img src="{{asset('assets/front/images/')}}/instagram-icon-3d.png" title="Instagramm"></a>
                    <a href="javascript:void(0);" title="Linkedin" class="link"> <img src="{{asset('assets/front/images/')}}/linkedin-icon-3d.png" title="Linkedin"></a>
                    <a href="javascript:void(0);" title="Facebook" class="link"> <img src="{{asset('assets/front/images/')}}/facebook-icon-3d.png" title="Facebook"></a>
                    <a href="javascript:void(0);" title="Twitter" class="link"> <img src="{{asset('assets/front/images/')}}/twitter-icon-3d.png" title="Twitter"></a>
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
    <!-- script js-->
    <script src="{{asset('assets/front/js/')}}/main.js"></script>
@endsection
