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
                        <a class="d-inline-block m-r-auto" href="{{url('/')}}">
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
                <img src="{{asset(($record->cover_image?$record->cover_image:'assets/admin/images/placeholder.png'))}}">
            </div>
        </section>

        <section class="beyondantProfileInfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInDown">
                        <div class="profile-img">
                            <img src="{{asset(($record->profile_picture?$record->profile_picture:'assets/admin/images/profile.jpg'))}}">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 textCenter_mob wow fadeInLeft">
                        <h2>{{ $record->name ?? '' }}</h2>
                        <p>{{ $record->job_title ?? '' }}</p>
                    </div>
                    <div class="col-md-4 col-lg-3 wow fadeInRight">
                        <a class="btn btn-default saveContact link" href="{{route('vcards',['action' => 'export', 'id' => $record->id])}}"> SAVE TO CONTACTS <i class="fas fa-download"></i></a>
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
                            <span class="Subtitle">{{ $record->job_title ?? '' }}</span>
                            {!! $record->company_description?? '' !!}
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeInRight animated" style="visibility: visible;">
                        <div class="pCd_right">
                            <div class="pCd_col">
                                <div class="row">
                                    <div class="col-lg-1 col-1 col-R-paddN">
                                        <img alt="" src="{{asset('assets/front/images/')}}/company-icon-red.png" class="img-fluid coliCon">
                                    </div>
                                    <div class="col-lg-11 col-11 col-L-paddN">
                                        <span class="title">Company Name</span>
                                        <span class="Subtitle">{{ $record->job_title ?? '' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pCd_col">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-1 col-R-paddN">
                                                <img alt="" src="{{asset('assets/front/images/')}}/phone-icon-red.png" class="img-fluid coliCon">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-11 col-L-paddN">
                                                <span class="title">Office Phone</span>
                                                <span class="Subtitle">{{ $record->contact_number ?? '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-1 col-R-paddN">
                                                <img alt="" src="{{asset('assets/front/images/')}}/mobile-icon-red.png" class="img-fluid coliCon">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-11 col-L-paddN">
                                                <span class="title">Mobile Number</span>
                                                <span class="Subtitle">{{ $record->mobile_number ?? '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pCd_col">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-1 col-R-paddN">
                                                <img alt="" src="{{asset('assets/front/images/')}}/fax-icon-red.png" class="img-fluid coliCon">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-11 col-L-paddN">
                                                <span class="title">Fax Number</span>
                                                <span class="Subtitle">{{ $record->fax_number ?? '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-1 col-R-paddN">
                                                <img alt="" src="{{asset('assets/front/images/')}}/envelope-icon-red.png" class="img-fluid coliCon">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-11 col-L-paddN">
                                                <span class="title">Email Address</span>
                                                <span class="Subtitle">{{ $record->email ?? '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pCd_col">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-1 col-R-paddN">
                                                <img alt="" src="{{asset('assets/front/images/')}}/location-icon-red.png" class="img-fluid coliCon">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-11 col-L-paddN">
                                                <span class="title">Physical Address</span>
                                                <span class="Subtitle">{{ $record->address ?? '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-1 col-R-paddN">
                                                <img alt="" src="{{asset('assets/front/images/')}}/globe-icon-red.png" class="img-fluid coliCon">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-11 col-L-paddN">
                                                <span class="title">Company Website</span>
                                                <span class="Subtitle">{{ $record->website ?? '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pCd_col noBordercol">
                                <span class="title">Social Media Profiles</span>
                                <a href="{{ $record->instagram ?? '' }}" title="Instagram"> <img src="{{asset('assets/front/images/')}}/instagram-icon-3d.png" title="Instagramm"></a>
                                <a href="{{ $record->linkedin ?? '' }}" title="Linkedin"><img src="{{asset('assets/front/images/')}}/linkedin-icon-3d.png" title="Linkedin"></a>
                                <a href="{{ $record->facebook ?? '' }}" title="Facebook"><img src="{{asset('assets/front/images/')}}/facebook-icon-3d.png" title="Facebook"></a>
                                <a href="{{ $record->twitter ?? '' }}" title="Twitter"><img src="{{asset('assets/front/images/')}}/twitter-icon-3d.png" title="Twitter"></a>
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
                        Copyright © 2020 Beyondant | All Rights Reserved - Powered by Beyondant
                    </div>
                    <div class="col-lg-2  wow fadeInRight">
                        <img alt="" class="img-fluid" src="{{asset('assets/front/images/')}}/logo.png">
                    </div>
                </div>
            </div>
        </footer>
        <!-- Profile Footer End -->
    </div>



    <div class="profileWrapper_Mob">
        <!-- Profile Heaer Start -->
        <header class="headerProfile cursor-light">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-sm-2 col-4">
                        <a class="d-inline-block m-r-auto" href="{{url('/')}}">
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
                <img src="{{asset(($record->cover_image?$record->cover_image:'assets/admin/images/placeholder.png'))}}">
            </div>
        </section>

        <section class="beyondantProfileInfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInDown">
                        <div class="profile-img">
                            <img src="{{asset(($record->profile_picture?$record->profile_picture:'assets/admin/images/profile.jpg'))}}">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 textCenter_mob wow fadeInLeft">
                        <h2>{{ $record->name ?? '' }}</h2>
                        <p>{{ $record->job_title ?? '' }}</p>
                    </div>
                    <div class="col-md-4 col-lg-3 wow fadeInRight">
                        <a class="btn btn-default saveContact link" href="{{route('vcards',['action' => 'export', 'id' => $record->id])}}"> SAVE TO CONTACTS <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profile Main Banner End -->


        <!-- Profile Mobile Contact Info Start -->
        <div class="ProfileContactInfo_mob">
            <div class="row contactInfo_child">
                @if ($record->mobile_check == 'Phone')
                    <div class="col-3"><img src="{{ asset('assets/front/images/phone-icon-red.png') }}" class="img-fluid"></div>
                    <div class="col-9"><p>{{ $record->mobile_check ?? '' }}</p>{{ $record->contact_number ?? '' }}</div>
                @elseif ($record->mobile_check == 'Fax')
                    <div class="col-3"><img src="{{ asset('assets/front/images/fax-icon-red.png') }}" class="img-fluid"></div>
                    <div class="col-9"><p>{{ $record->mobile_check ?? '' }}</p>{{ $record->fax_number ?? '' }}</div>
                @else
                    <div class="col-3"><img src="{{ asset('assets/front/images/mobile-icon-red.png') }}" class="img-fluid"></div>
                    <div class="col-9"><p>{{ $record->mobile_check ?? '' }}</p>{{ $record->mobile_number ?? '' }}</div>
                @endif
            </div>
            <div class="row contactInfo_child">
                <div class="col-3"><img alt="Envelope" src="{{ asset('assets/front/images/envelope-icon-red.png') }}" class="img-fluid"></div>
                <div class="col-9"><p>Email</p>{{ $record->email ?? '' }}</div>
            </div>
            <div class="row contactInfo_child">
                @if ($record->website_address == 'Website')
                    <div class="col-3"><img src="{{ asset('assets/front/images/globe-icon-red.png') }}" class="img-fluid"></div>
                    <div class="col-9"><p>{{ $record->website_address ?? '' }}</p>{{ $record->website ?? '' }}</div>
                @else
                    <div class="col-3"><img src="{{ asset('assets/front/images/location-icon-red.png') }}" class="img-fluid"></div>
                    <div class="col-9"><p>{{ $record->website_address ?? '' }}</p>{{ $record->address ?? '' }}</div>
                @endif

            </div>
        </div>
        <!-- Profile Mobile Contact Info End -->

        <!-- Profile Mobile Footer Start -->
        <footer class="profileFooter_mob">
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
