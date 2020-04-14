@extends('front.layout.app')
@section('pageCss')
    <!-- Custom css -->
    <link href="{{asset('assets/front/css/profile.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <style>
        #con{
            height: 416px;
            overflow: hidden;
        }

        /*#display up {*/
        /*    width: 1250px;*/
        /*}*/

        @media only screen and (max-width: 1200px) {
            #con{
                height: 335px;
                overflow: hidden;
            }
            #display{
               display: inline-block;
                /*width:1200px;*/
            }
        }

        @media only screen and (max-width: 992px) {
            #con{
                height: 225px;
                overflow: hidden;
            }
            #display{
                display: inline-block;
                /*width:1200px;*/
            }

        }

        .save_cover{
            background: #be0103;
            color: #fff;
            font-size: 12px;
            position: absolute;
            padding: 10px 40px;
            bottom: 15px;
            right: 30px;
            z-index: 9;
        }


        @media only screen and (max-width: 750px) {
            #con{
                height: 185px;
                overflow: hidden;
            }
            #display{
               width: 100%;
            }

            .BTNcontainer .icon {
                color: #fff !important;
                font-size: 20px;
                position: absolute;
                top: 45px;
                left: 61px;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                text-align: center;
                background: #be0103;
                padding: 15px;
                border-radius: 100%;
                line-height: 20px;
            }

            .edit-profile-btn {
                background: #fff;
                border-color: #fff;
                color: #be0103;
                padding: 15px;
                border-radius: 100px;
                width: 50px;
                font-size: 20px;
                position: absolute;
                z-index: 9;
                top: 79px;
                left: 38px;
                height: 50px;
            }

            .save{
                background: #be0103;
                color: #fff;
                padding: 7px 25px;
                border: none;
                width: 100%;
                font-size: 15px;
            }


        }

        @media only screen and (max-width: 508px) {
            #con{
                height: 145px;
                overflow: hidden;
            }
            #display{
                width: 100%;

            }
        }
        </style>
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
                <div id="con">
{{--                    class="cover-image profile-picOne"--}}
                @if (isset($companyInfo) && $record->cover_image=="")
                    <img id="display" src="{{asset(($companyInfo->cover_image?$companyInfo->cover_image:'assets/front/images/cover.jpg'))}}" style="top:{{$companyInfo->cover_pos}}px;position: relative" >
                @else
                    <img id="display" src="{{asset(($record->cover_image?$record->cover_image:'assets/front/images/cover.jpg'))}}" style="top:{{$record->cover_pos}}px;position: relative" >
                @endif
                </div>
                @guest
                @else
                    <div class="overlay">
                        <form id="filecover_image" action="" method="post" enctype="multipart/form-data">
                    <span class="icon" title="User Profile">
                        <i class="fas fa-image upload-buttonOne"></i>
                        <input class="file-uploadOne" id="cover_image" name="cover_image" type="file" accept="image/*">
                        <input name="cover_top" type="hidden" value="0" />
                        <span class="text">Update Cover Photo</span>
                    </span>
                        </form>
                    </div>
                    <a class="edit-profile-btn" id="edit_profile" href="{{route('edit-profile',$record->id)}}"><i class="fas fa-edit"></i> Edit Profile </a>
                    <button class="edit-profile-btn" id="pos" style="display: none; color: #fff">Save Changes </button>
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
                            {!! isset($companyInfo)?$companyInfo->company_description:$record->company_description?? '' !!}
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
                                        <span class="Subtitle">{{ isset($companyInfo)?$companyInfo->company_name:$record->company_name ?? '' }}</span>
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
{{--                                                    @php $ext = explode(" ",$companyInfo->contact_number??$record->contact_number); echo $ext[0].' '.$ext[1]; @endphp--}}
                                                    <span class="Subtitle">{{isset($companyInfo)?$companyInfo->contact_number:$record->contact_number??""}}</span>
                                                @else
                                                    <span class="title">Office Phone</span>
{{--                                                    @php $ext = explode(" ",$companyInfo->contact_number??$record->contact_number); echo $ext[0].' '.$ext[1]; echo !empty($ext[2])? ' Ext. '.$ext[2] : '' @endphp--}}
                                                    <span class="Subtitle">{{isset($companyInfo)?$companyInfo->contact_number:$record->contact_number??""}}</span>
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
                                                <span class="Subtitle" style="word-wrap: break-word">{{ $companyInfo->website??$record->website  }}</span>
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
                <div class="container" id="save_container" style="width:94.2%;position:absolute;display:none;z-index:1000;height: 60px;background-color:rgba(59,73,71,0.7)">
                    <div class="row p-3" id="save_text">
                        <div class="col-4"><p style="color: #fff;">Save Changes</p></div>
                        <div class="col-4 offset-3 ">
                            <button class="save" id="pos2">Save</button>
                        </div>
                    </div>
                </div>
                <div id="con">
                    {{--                    class="cover-image profile-picOne"--}}

                    @if (isset($companyInfo) && $record->cover_image=="")
                        <img id="display2" src="{{asset(($companyInfo->cover_image?$companyInfo->cover_image:'assets/front/images/cover.jpg'))}}" style="top:{{$companyInfo->cover_pos}}px;position: relative" >
                    @else
                        <img id="display2" src="{{asset(($record->cover_image?$record->cover_image:'assets/front/images/cover.jpg'))}}" style="top:{{$record->cover_pos}}px;position: relative" >
                    @endif
                </div>
                    @guest
                @else
                    <form id="filecover_imageTwo" action="" method="post" enctype="multipart/form-data">
                    <span class="icon" title="User Cover" id="upload">
                        <i class="fas fa-image upload-buttonTwo"></i>
                        <input class="file-uploadTwo" type="file" id="cover_image" name="cover_image" accept="image/*">
                         <input id="cover_top2" name="cover_top" type="hidden" value="0" />
                    </span>
                    </form>
                    <a class="edit-profile-btn" id="edit_profile2" href="{{route('edit-profile',$record->id)}}"><i class="fas fa-edit"></i></a>
{{--                    <a class="edit-profile-btn save" id="pos2" style="display:none;float: right"><i class="fas fa-save"></i></a>--}}
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


    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.min.js" integrity="sha256-EuV9YMxdV2Es4m9Q11L6t42ajVDj1x+6NZH4U1F+Jvw=" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
        crossorigin="anonymous"></script>
    <script src="{{asset('assets/front/js/jquery.ui.touch-punch.min.js')}}"></script>


    <!-- script js-->
    <script src="{{asset('assets/front/js/profile.js')}}"></script>
    <script>



        $(document).ready(function () {
            function adjust(){

                if(window.innerWidth>=1200){
                    $("#display2").css({"top":top});
                }
                if(top<0){
                if(window.innerWidth<=992){
                    $("#display").css({"top":top+20});
                }}
                if(top2<0){
                if(window.innerWidth<768){
                    $("#display2").css({"top":top2+(-top2)*0.5});
                }
                if(window.innerWidth<500){
                    $("#display2").css({"top":top2+(-top2)*0.7});
                }
                if(window.innerWidth<400){
                    $("#display2").css({"top":top2+(-top2)*0.8});
                }}
            }
            var image=$("#display");
            var image2=$("#display2");
            var top=parseInt(image.css("top"));
            var top2=parseInt(image2.css("top"));
            adjust();
            window.onresize=function(){
                adjust();
            };
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

            function setImage(){
                var reader=new FileReader();
                reader.onload=function(eve){
                    image.attr("src",eve.target.result);
                };
                reader.readAsDataURL($(".file-uploadOne")[0].files[0]);
            }

            function setImage2(){
                var reader=new FileReader();
                reader.onload=function(eve){
                    image2.attr("src",eve.target.result);
                };
                reader.readAsDataURL($(".file-uploadTwo")[0].files[0]);
            }

            $(document).on('change', '.file-uploadOne', function () {

                $("#edit_profile").css({"display":"none"});
                $("#pos").css({"display":"block"});
                $("#edit_profile").css({"display":"none"});
                $(".overlay").css({"display":"none"});
                image.css({"top":0});
                //image.css({"top":-121});
                setImage();
                image.draggable({

                    axis:'y',
                    cursor:'move',
                    drag:function(event,ui){

                        var diff=ui.helper[0].clientHeight-ui.helper[0].parentNode.clientHeight;
                        if(ui.position.top>0)ui.position.top=0;
                        else if(-ui.position.top>=diff)ui.position.top=-diff;
                        $('[name="cover_top"]').val(ui.position.top);
                    }
                });
            });

            $("#pos").click(function () {
                let forms = document.querySelector('#filecover_image');
                $(this).addClass("disabled");
                $(this).text("Saving....");

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

                $("#edit_profile2").css({"display":"none"});
                $("#save_container").css({"display":"block"});
                $("#upload").css({"display":"none"});
                image2.css({"top":0});
                setImage2();
                image2.draggable({
                    axis:'y',
                    cursor:'move',
                    drag:function(event,ui){

                        var diff=ui.helper[0].clientHeight-ui.helper[0].parentNode.clientHeight;
                        if(ui.position.top>0)ui.position.top=0;
                        else if(-ui.position.top>=diff)ui.position.top=-diff;
                        $('#cover_top2').val(ui.position.top);
                    }
                });



            });



            $("#pos2").click(function () {
                let forms = document.querySelector('#filecover_imageTwo');
                $("#save_text").empty();
                $("#save_text").append("<p class='text-center text-light'>Saving...</p>");
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
