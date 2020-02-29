@extends('front.layout.app')
@section('pageCss')
    <!-- Custom css -->
    <link href="{{asset('assets/front/css/profile.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<!-- Profile Heaer Start -->
<header class="headerProfile cursor-light">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-2 col-4">
                <a class="d-inline-block m-r-auto" href="index.html">
                    <img alt="" class="img-fluid m-t-10 m-b-10 link" src="{{asset('assets/front/images/')}}/logo-dark.png">
                </a>
            </div>
        </div>
    </div>
</header>
<!-- Profile Heaer End -->

<!-- Profile Main Banner Start -->
<section class="beyondantProfileMain cursor-light">
    <div class="container">
        <img src="{{asset('assets/front/images/')}}/profile-main-img.jpg">
    </div>
</section>

<section class="beyondantProfileInfo">
    <div class="container">
        <div class="row">
            <div class="col-md-4 wow fadeInDown">
                <div class="profile-img">
                    <img src="{{asset('assets/front/images/')}}/user-img-1.jpg">
                </div>
            </div>
            <div class="col-md-4 col-lg-5 textCenter_mob wow fadeInLeft">
                <h2>Johnny Mick</h2> <p>Chief Executive Officer</p>
            </div>
            <div class="col-md-4 col-lg-3 wow fadeInRight">
                <a class="btn btn-default saveContact link" href="javascript:void(0);"> SAVE TO CONTACT <i class="fas fa-download"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Profile Main Banner End -->


<!-- Profile Content Start -->
<div class="profileContent_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  wow fadeInLeft">
                <div class="pCd">
                    <span class="title">Company Description</span>
                    <span class="Subtitle">Mick & Associates, LLC</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-lg-8 wow fadeInRight">
                <div class="pCd_right">
                    <div class="pCd_col">
                        <span class="title">Company Name</span>
                        <span class="Subtitle">Mick & Associates, LLC</span>
                    </div>
                    <div class="pCd_col">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="title">Phone Number</span>
                                <span class="Subtitle">+1 365 987 6321</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="title">Mobile Number</span>
                                <span class="Subtitle">+1 5698 6362 563</span>
                            </div>
                        </div>
                    </div>
                    <div class="pCd_col">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="title">Fax Number</span>
                                <span class="Subtitle">+1 365 987 6321</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="title">Email Address</span>
                                <span class="Subtitle">johnny.mick@demo.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="pCd_col">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="title">Physical Address</span>
                                <span class="Subtitle">777 Brockton Avenue, <br>Abington MA 2351</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="title">Company Website</span>
                                <span class="Subtitle">johnny.mick@demo.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="pCd_col noBordercol">
                        <span class="title">Social Media Profiles</span>
                        <a href="javascript:void(0);" title="Instagram"> <img src="{{asset('assets/front/images/')}}/instagram-icon.jpg" title="Instagramm"></a>
                        <a href="javascript:void(0);" title="Linkedin"><img src="{{asset('assets/front/images/')}}/linkedin-icon.jpg" title="Linkedin"></a>
                        <a href="javascript:void(0);" title="Facebook"><img src="{{asset('assets/front/images/')}}/facebook-icon.jpg" title="Facebook"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Content End -->


<!-- Profile Footer Start -->
<footer class="profileFooter">
    <div class="container">
        <div class="row">
            <div class="col-lg-10  wow fadeInLeft">
                Copyright © 2020 Beyondan | All Rights Reserved
            </div>
            <div class="col-lg-2  wow fadeInRight">
                <img alt="" class="img-fluid" src="{{asset('assets/front/images/')}}/logo.png">
            </div>
        </div>
    </div>
</footer>
<!-- Profile Footer End -->


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
    <script src="{{asset('assets/front/js/profile.js')}}"></script>
@endsection
