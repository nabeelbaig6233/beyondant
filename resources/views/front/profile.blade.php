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
                            <img alt="" class="img-fluid link lW" src="{{asset('assets/front/images/')}}/logo-dark.png">
                        </a>
                    </div>
                    <div class="col-sm-2 col-4 text-right">
                        @guest
                        @else
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="d-inline-block m-r-auto user-logout">Logout</a>
                            <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">@csrf</form>
                        @endguest
                    </div>
                </div>
            </div>
        </header>
        <!-- Profile Heaer End -->

        <!-- Profile Main Banner Start -->
        <section class="beyondantProfileMain cursor-light">
            <div class="container BTNcontainer">
                <img src="{{asset(($record->cover_image?$record->cover_image:'assets/front/images/cover.jpg'))}}" class="cover-image profile-picOne">
                @guest
                @else
                    <div class="overlay">
                        <form id="filecover_image" action="" method="post" enctype="multipart/form-data">
                    <span class="icon" title="User Profile">
                        <i class="fas fa-image upload-buttonOne"></i>
                        <input class="file-uploadOne" id="cover_image" name="cover_image" type="file" accept="image/*">
                        <span class="text">Update Cover Photo</span>
                    </span>
                        </form>
                    </div>
                    <a class="edit-profile-btn" href="{{route('edit-profile',$record->id)}}"><i class="fas fa-edit"></i> Edit Profile </a>
                @endguest
            </div>
        </section>

        <section class="beyondantProfileInfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInDown">
                        <div class="profile-img">
                            <img src="{{asset(($record->profile_picture?$record->profile_picture:'assets/admin/images/profile.jpg'))}}" class="profile-pic">
                            @guest
                            @else
                                <div class="overlay">
                                    <form id="fileprofile_picture" action="" method="post" enctype="multipart/form-data">
                                <span class="icon" title="User Profile">
                                    <i class="fas fa-image upload-button"></i>
                                    <input class="file-upload" type="file" id="profile_picture" name="profile_picture" accept="image/*">
                                    <span class="text">Upload</span>
                                </span>
                                        {{--                                    <button class="btn btn-info" type="submit">upload</button>--}}
                                    </form>
                                </div>
                            @endguest
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 textCenter_mob wow fadeInLeft">
                        <h2><strong>{{ $record->first_name ?? '' }} {{ $record->last_name ?? '' }}</strong></h2>
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
                        <!--<span class="Subtitle">{{ $record->job_title ?? '' }}</span>-->
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
                                        <span class="Subtitle">{{ $record->company_name ?? '' }}</span>
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
                                                @if($record->mobile_check == 'Phone')
                                                    <span class="title">Phone Number</span>
                                                    <span class="Subtitle">@php $ext = explode(" ",$record->contact_number); echo $ext[0].' '.$ext[1]; @endphp</span>
                                                @else
                                                    <span class="title">Office Phone</span>
                                                    <span class="Subtitle">@php $ext = explode(" ",$record->contact_number); echo $ext[0].' '.$ext[1]; echo !empty($ext[2])? ' Ext. '.$ext[2] : '' @endphp</span>
                                                @endif
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
                                                <img alt="" src="{{asset('assets/front/images/')}}/envelope-icon-red.png" class="img-fluid coliCon">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-11 col-L-paddN">
                                                <span class="title">Email Address</span>
                                                <span class="Subtitle">{{ $record->email ?? '' }}</span>
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
                                                <span class="Subtitle" style="word-wrap: break-word">{{ $record->website ?? '' }}</span>
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
                                                <span class="Subtitle">{{ $record->address ?? '' }}, {{ $record->city ?? '' }},  {{ $record->state ?? '' }} {{ $record->zipcode ?? '' }}</span>
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
                                <a href="{{ $record->tiktok ?? '' }}" title="Tiktok" class="link"> <img src="{{asset('assets/front/images/')}}/tiktok-icon-3d.png" title="Tiktok"></a>
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
                        Copyright © 2020 {{ $setting->title ?? '' }} | All Rights Reserved - Powered by {{ $setting->title ?? '' }}
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
                            <img alt="" class="img-fluid link" src="{{asset('assets/front/images/')}}/logo-dark.png">
                        </a>
                    </div>
                    <div class="col-sm-2 col-4 text-right">
                        @guest
                        @else
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="d-inline-block m-r-auto user-logout">Logout</a>
                            <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">@csrf</form>
                        @endguest
                    </div>
                </div>
            </div>
        </header>
        <!-- Profile Heaer End -->

        <!-- Profile Main Banner Start -->
        <section class="beyondantProfileMain cursor-light">
            <div class="container BTNcontainer">
                <img src="{{asset(($record->cover_image?$record->cover_image:'assets/front/images/cover.jpg'))}}" class="cover-image profile-picTwo">
                @guest
                @else
                    <form id="filecover_imageTwo" action="" method="post" enctype="multipart/form-data">
                    <span class="icon" title="User Cover">
                        <i class="fas fa-image upload-buttonTwo"></i>
                        <input class="file-uploadTwo" type="file" id="cover_image" name="cover_image" accept="image/*">
                    </span>
                    </form>
                    <a class="edit-profile-btn" href="{{route('edit-profile',$record->id)}}"><i class="fas fa-edit"></i></a>
                @endguest
            </div>

        </section>

        <section class="beyondantProfileInfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInDown">
                        <div class="profile-img">
                            <img src="{{asset(($record->profile_picture?$record->profile_picture:'assets/admin/images/profile.jpg'))}}" class="profile-picThree">
                            @guest
                            @else
                                <form id="fileprofile_picture" action="" method="post" enctype="multipart/form-data">
                            <span class="icon" title="User Profile">
                                <i class="fas fa-image upload-buttonThree"></i>
                                <input class="file-uploadThree" type="file" id="profile_picture" name="profile_picture" accept="image/*">
                                <!--<span class="text">Upload</span>-->
                            </span>
                                </form>
                            @endguest
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 textCenter_mob wow fadeInLeft">
                        <h2><strong>{{ $record->first_name ?? '' }} {{ $record->last_name ?? '' }}</strong></h2>
                        <p>{{ $record->job_title ?? '' }} <span>{{ $record->company_name ?? '' }}</span></p>
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
                    <div class="col-9" style="word-wrap: break-word"><p>{{ $record->website_address ?? '' }}</p>{{ $record->website ?? '' }}</div>
                @else
                    <div class="col-3"><img src="{{ asset('assets/front/images/location-icon-red.png') }}" class="img-fluid"></div>
                    <div class="col-9"><p>{{ $record->website_address ?? '' }}</p>{{ $record->address ?? '' }}, {{ $record->city ?? '' }}, {{ $record->state ?? '' }} {{ $record->zipcode ?? '' }}</div>
                @endif

            </div>
        </div>
        <!-- Profile Mobile Contact Info End -->

        <!-- Profile Mobile Footer Start -->
        <footer class="profileFooter_mob">
            <div class="text-center m-b-20">
                <a href="{{ $record->instagram ?? '' }}" title="Instagram"> <img src="{{asset('assets/front/images/')}}/instagram-icon-3d.png" title="Instagramm"></a>
                <a href="{{ $record->linkedin ?? '' }}" title="Linkedin"><img src="{{asset('assets/front/images/')}}/linkedin-icon-3d.png" title="Linkedin"></a>
                <a href="{{ $record->facebook ?? '' }}" title="Facebook"><img src="{{asset('assets/front/images/')}}/facebook-icon-3d.png" title="Facebook"></a>
                <a href="{{ $record->tiktok ?? '' }}" title="Tiktok" class="link"> <img src="{{asset('assets/front/images/')}}/tiktok-icon-3d.png" title="Tiktok"></a>
            </div>
            Digital Business Card Powered By {{ $setting->title ?? '' }}
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
    <script>
        $(document).ready(function () {
            $(document).on('change', '.file-upload', function () {
                let forms = document.querySelector('#fileprofile_picture');
                $.ajax({
                    url: "{{ route('upload-profile-pic', request()->segment(2) ) }}",
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: new FormData(forms),
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        window.location.reload();
                    }
                });
            });

            $(document).on('change', '.file-uploadOne', function () {
                let forms = document.querySelector('#filecover_image');
                $.ajax({
                    url: "{{ route('upload-cover-pic', request()->segment(2) ) }}",
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: new FormData(forms),
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        window.location.reload();
                    }
                });
            });

            $(document).on('change', '.file-uploadTwo', function () {
                let forms = document.querySelector('#filecover_imageTwo');
                $.ajax({
                    url: "{{ route('upload-cover-pic', request()->segment(2) ) }}",
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: new FormData(forms),
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        window.location.reload();
                    }
                });
            });


            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.profile-picOne').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-uploadOne").on('change', function () {
                readURL(this);
            });

            $(".upload-buttonOne").on('click', function () {
                $(".file-uploadOne").click();
            });
        });
        $(document).ready(function () {
            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {

                        $('.profile-pic').attr('src', e.target.result);
                        // console.log(e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-upload").on('change', function () {
                readURL(this);
            });

            $(".upload-button").on('click', function () {
                $(".file-upload").click();
            });
        });
        $(document).ready(function () {
            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.profile-picTwo').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-uploadTwo").on('change', function () {
                readURL(this);
            });

            $(".upload-buttonTwo").on('click', function () {
                $(".file-uploadTwo").click();
            });
        });
        $(document).ready(function () {
            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.profile-picThree').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-uploadThree").on('change', function () {
                readURL(this);
            });

            $(".upload-buttonThree").on('click', function () {
                $(".file-uploadThree").click();
            });
        });
    </script>
@endsection
