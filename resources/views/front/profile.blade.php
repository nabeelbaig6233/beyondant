@extends('front.layout.app')
@section('pageCss')
    <!-- Custom css -->
    <link href="{{asset('assets/front/css/profile.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <!-- Profile Wraper Start -->
    <div class="profileWrapper">
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
                <img style="max-width: 1250px; max-height: 416px" src="{{asset(($record->cover_image?$record->cover_image:'assets/admin/images/placeholder.png'))}}">
            </div>
        </section>

        <section class="beyondantProfileInfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInDown">
                        <div class="profile-img">
                            <img src="{{asset(($record->profile_image?$record->profile_image:'assets/admin/images/profile.jpg'))}}">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 textCenter_mob wow fadeInLeft">
                        <h2>{{$record->name ?? ''}}</h2> <p>{{$record->title ?? ''}}</p>
                    </div>
                    <div class="col-md-4 col-lg-3 wow fadeInRight">
                        <a class="btn btn-default saveContact link" href="{{route('vcards',['action' => 'export', 'id' => $record->id])}}" title="Export to VCard"> SAVE TO CONTACT <i class="fas fa-download"></i></a>
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
                            <span class="Subtitle">{{$record->title ?? ''}}</span>
                            {!! $record->company_description?? '' !!}
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeInRight">
                        <div class="pCd_right">
                            <div class="pCd_col">
                                <span class="title">Company Name</span>
                                <span class="Subtitle">{{$record->company_name ?? ''}}</span>
                            </div>
                            <div class="pCd_col">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="title">Phone Number</span>
                                        <span class="Subtitle">{{$record->phone_number ?? ''}}</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="title">Mobile Number</span>
                                        <span class="Subtitle">{{$record->mobile_number ?? ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pCd_col">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="title">Fax Number</span>
                                        <span class="Subtitle">{{$record->fax_number ?? ''}}</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="title">Email Address</span>
                                        <span class="Subtitle">{{$record->email ?? ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pCd_col">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="title">Physical Address</span>
                                        <span class="Subtitle">{{$record->address ?? ''}}</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="title">Company Website</span>
                                        <span class="Subtitle">{{$record->website ?? ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pCd_col noBordercol">
                                <span class="title">Social Media Profiles</span>
                                <a href="{{$record->instagram ?? ''}}" title="Instagram"> <img src="{{asset('assets/front/images/')}}/instagram-icon.jpg" title="Instagramm"></a>
                                <a href="{{$record->linkedin ?? ''}}" title="Linkedin"><img src="{{asset('assets/front/images/')}}/linkedin-icon.jpg" title="Linkedin"></a>
                                <a href="{{$record->facebook ?? ''}}" title="Facebook"><img src="{{asset('assets/front/images/')}}/facebook-icon.jpg" title="Facebook"></a>
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
                        Copyright © {{date('Y')}} Beyondan | All Rights Reserved
                    </div>
                    <div class="col-lg-2  wow fadeInRight">
                        <img alt="" class="img-fluid" src="{{asset($setting->logo?? '')}}">
                    </div>
                </div>
            </div>
        </footer>
        <!-- Profile Footer End -->
    </div>



    <div class="profileWrapper_Mob">
        <!-- Profile Mobile Heaer Start -->
        <header class="headerProfile_mob cursor-light">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="mainTitle">{{$record->company_name ?? ''}}</h2>
                    </div>
                </div>
            </div>
        </header>
        <!-- Profile Mobile Heaer End -->

        <!-- Profile Mobile Main Banner Start -->
        <section class="beyondantProfileMain cursor-light">
            <img style="max-width: 375px; height: 209px" src="{{asset(($record->cover_image?$record->cover_image:'assets/admin/images/placeholder.png'))}}">
        </section>
        <!-- Profile Mobile Main Banner End -->

        <!-- Profile Mobile User Name Start -->
        <div class="ProfileName_mob">
            <div class="name"> {{$record->name ?? ''}} <span>{{$record->title ?? ''}}</span></div>
        </div>
        <!-- Profile Mobile User Name End -->
        <!-- Profile Mobile Contact Info Start -->
        <div class="ProfileContactInfo_mob">
            <div class="row contactInfo_child">
                <div class="col-2"><img src="{{asset('assets/front/images/')}}/phone-icon.png"></div>
                <div class="col-10">{{$record->phone_number ?? ''}}</div>
            </div>
            <div class="row contactInfo_child">
                <div class="col-2"><img src="{{asset('assets/front/images/')}}/envelope-icon.png"></div>
                <div class="col-10">{{$record->email ?? ''}}</div>
            </div>
            <div class="row contactInfo_child">
                <div class="col-2"><img src="{{asset('assets/front/images/')}}/globe-icon.png"></div>
                <div class="col-10">{{$record->website ?? ''}}</div>
            </div>
        </div>
        <!-- Profile Mobile Contact Info End -->

        <!-- Profile Mobile Footer Start -->
        <footer class="profileFooter_mob">
            <a class="btn btn-default saveContact link" href="javascript:void(0);"> Save Contact</a>
            Digital Business Card Powered By Beyondant
        </footer>
        <!-- Profile Mobile Footer End -->
    </div>

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
