@extends('front.layout.app')
@section('pageCss')
    <!-- Custom css -->
    <link href="{{asset('assets/front/css/profile.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel='stylesheet prefetch' href='https://foliotek.github.io/Croppie/croppie.css'>

    <!-- Datatables -->
    <link href="{{ asset('assets/admin/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <style>
        /*#con{*/
        /*    height: 416px;*/
        /*    overflow: hidden;*/
        /*}*/

        /*!*#display up {*!*/
        /*!*    width: 1250px;*!*/
        /*!*}*!*/

        /*@media only screen and (max-width: 1200px) {*/
        /*    #con{*/
        /*        height: 90%;*/
        /*        overflow: hidden;*/
        /*    }*/
        /*    #display{*/
        /*       display: inline-block;*/
        /*        !*width:1200px;*!*/
        /*    }*/
        /*}*/

        /*@media only screen and (max-width: 992px) {*/
        /*    #con{*/
        /*        height: 225px;*/
        /*        overflow: hidden;*/
        /*    }*/
        /*    #display{*/
        /*        display: inline-block;*/
        /*        !*width:1200px;*!*/
        /*    }*/

        /*}*/

        /*.save_cover{*/
        /*    background: #be0103;*/
        /*    color: #fff;*/
        /*    font-size: 12px;*/
        /*    position: absolute;*/
        /*    padding: 10px 40px;*/
        /*    bottom: 15px;*/
        /*    right: 30px;*/
        /*    z-index: 9;*/
        /*}*/


        /*@media only screen and (max-width: 750px) {*/
        /*    !*#con{*!*/
        /*    !*    height: 185px;*!*/
        /*    !*    overflow: hidden;*!*/
        /*    !*}*!*/
        /*    !*#display{*!*/
        /*    !*   width: 100%;*!*/
        /*    !*}*!*/

        /*    .BTNcontainer .icon {*/
        /*        color: #fff !important;*/
        /*        font-size: 20px;*/
        /*        position: absolute;*/
        /*        top: 45px;*/
        /*        left: 61px;*/
        /*        transform: translate(-50%, -50%);*/
        /*        -ms-transform: translate(-50%, -50%);*/
        /*        text-align: center;*/
        /*        background: #be0103;*/
        /*        padding: 15px;*/
        /*        border-radius: 100%;*/
        /*        line-height: 20px;*/
        /*    }*/

        /*    .edit-profile-btn {*/
        /*        background: #fff;*/
        /*        border-color: #fff;*/
        /*        color: #be0103;*/
        /*        padding: 15px;*/
        /*        border-radius: 100px;*/
        /*        width: 50px;*/
        /*        font-size: 20px;*/
        /*        position: absolute;*/
        /*        z-index: 9;*/
        /*        top: 79px;*/
        /*        left: 38px;*/
        /*        height: 50px;*/
        /*    }*/

        /*    .save{*/
        /*        background: #be0103;*/
        /*        color: #fff;*/
        /*        padding: 7px 25px;*/
        /*        border: none;*/
        /*        width: 100%;*/
        /*        font-size: 15px;*/
        /*    }*/


        /*}*/

        /*@media only screen and (max-width: 508px) {*/
        /*    #con{*/
        /*        height: 60%;*/
        /*        overflow: hidden;*/
        /*    }*/
        /*    #display{*/
        /*        width: 100%;*/

        /*    }*/
        /*}*/
        </style>
@endsection
@section('content')


    <!--Cropping Modal -->
    <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #be0103;">
                    <h5 class="modal-title text-light" id="croptitle">Drag To Adjust</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0px">
                    <img  id="cropper" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary back_profile_pic" data-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-danger save_profile_pic"  style="background-color: #be0103;">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>

{{--END Cropping Modal--}}

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

{{--        Save Contacts Modal --}}




        <!-- Modal -->
        <div class="modal fade" id="saveToCotacts" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form id="meetForm" method="POST">
                        <div class="modal-header" style="background-color: #be0103;">
                            <h5 class="modal-title text-white" id="exampleModalLongTitle">To stay in touch - may I have your contact Info as well?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 pt-2">
                                    <input type="text" placeholder="Enter Our 1st Meeting Location" name="meeting_location" class="form-control" />
                                </div>
                                <div class="col-12 pt-2">
                                    <input type="text" placeholder="Your First Name" name="first_name" class="form-control" />
                                </div>
                                <div class="col-12 pt-2">
                                    <input type="text" placeholder="Your Last Name" name="last_name" class="form-control" />
                                </div>
                                <div class="col-12 pt-2">
                                    <input type="email" placeholder="Your E-mail" name="email" class="form-control" />
                                </div>
                                <div class="col-12 pt-2">
                                    <input type="text" placeholder="Your Phone Number" name="phone_number" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-lg mr-auto close_meet" data-dismiss="modal" >Close</button>
                            <a class="btn btn-danger btn-lg bypass_contact" style="background-color: #be0103;"  href="{{route('vcards',['action' => 'export', 'id' => $record->id])}}"> Bypass </a>
                            <button type="submit" class="btn btn-danger btn-lg continue_contact" data-id="{{$record->id}}" style="background-color: #be0103;">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


{{--        End Save Contacts Modal--}}

{{--Contacts Modala--}}

        <div id="contactsModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #be0103;">
                        <h4 class="modal-title text-white">View {{ucwords(str_replace('_',' ','Contacts'))}}</h4>
                        <button type="button" class="close" data-dismiss="modal" style="    color: #fff;">&times;</button>

                    </div>
                    <div class="modal-body">


                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="contactsTable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>

                                            <tr>
                                                <th>{{ucwords(str_replace('_',' ','First Name'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','Last Name'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','Email'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','Phone'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','Location'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','Date'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','Time'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','Action'))}}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="contacts_body">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


{{--End Contacts Modal--}}

        {{--    Video Url Modal   --}}
{{--        @if(auth()->check())--}}
{{--            <div class="modal fade" id="embeddedModal" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--                <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                    <div class="modal-content">--}}
{{--                        <form method="post" action="{{route('upload-embedded',auth()->user()->id)}}">--}}
{{--                            @method('patch')--}}
{{--                            <div class="modal-header">--}}
{{--                                <h5 class="modal-title text-danger" id="exampleModalLongTitle">Embedded Video URL</h5>--}}
{{--                                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <input type="hidden" name="_token" value="{{csrf_token()}}" />--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="embedded_url">Enter Video URL</label>--}}
{{--                                    <input type="text" class="form-control" name="embedded_url" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                <button type="submit" class="btn btn-danger">Save changes</button>--}}
{{--                            </div>--}}

{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--    @endif--}}
    {{--    End Video Url Modal    --}}

        <!-- Profile Main Banner Start -->
        <section class="beyondantProfileMain cursor-light">
            <div class="container BTNcontainer">
{{--                <div id="con">--}}
{{--                 style="top:{{$companyInfo->cover_pos}}px;position: relative"  --}}
                @if (isset($companyInfo) && ($record->cover_image=="" && $record->cover_video=="" && $record->cover_slideshow=="" && $record->cover_embed==""))
                    @if($companyInfo->cover_selection=='video')
                        <video id="display-video" controls autoplay muted loop class="cover-image profile-picOne img-fluid">
                            <source src="{{asset($companyInfo->cover_video)}}">
                        </video>
                    @elseif($companyInfo->cover_selection=='slideshow')


                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                            <ol class="carousel-indicators">
                                @for($indicator=0;$indicator<count(json_decode($companyInfo->cover_slideshow));$indicator++)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$indicator}}" class="{{$indicator==0 ? 'active':''}}" ></li>
                                @endfor
                            </ol>
                            <div class="carousel-inner">
                                @php $images=json_decode($companyInfo->cover_slideshow) @endphp
                                @foreach($images as $image)
                                    <div class="carousel-item {{$image==reset( $images )? 'active':''}}">
                                        <img style="height: 450px" class="d-block w-100 img-fluid" src="{{asset($image)}}" alt="The Image Will Be Loaded Shortly">
                                    </div>
                                @endforeach
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

                    @elseif($companyInfo->cover_selection=='embedded')
                        <iframe
                            style="height: 450px;"
                            id="display-embedded"
                            class="cover-image profile-picOne img-fluid"
                            src="{{'https://www.youtube.com/embed/'.$companyInfo->cover_embed}}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        >
                        </iframe>


                    @else
                        <img id="display" src="{{asset(($companyInfo->cover_image?$companyInfo->cover_image:'assets/front/images/cover.jpg'))}}"  class="cover-image profile-picOne img-fluid"  >
                    @endif
                @else
                    @if($record->cover_selection=='video')
                        <video id="display-video" controls autoplay muted loop class="cover-image profile-picOne img-fluid embed-responsive-4by3">
                            <source src="{{asset($record->cover_video)}}">
                        </video>

                    @elseif($record->cover_selection=='slideshow')

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                            <ol class="carousel-indicators">
                                @for($indicator=0;$indicator<count(json_decode($record->cover_slideshow));$indicator++)
                                     <li data-target="#carouselExampleIndicators" data-slide-to="{{$indicator}}" class="{{$indicator==0 ? 'active':''}}" ></li>
                                @endfor
                            </ol>
                            <div class="carousel-inner">
                                @php $images=json_decode($record->cover_slideshow) @endphp
                                @foreach($images as $image)
                                 <div class="carousel-item {{$image==reset( $images )? 'active':''}}">
                                   <img style="height: 450px" class="d-block w-100 img-fluid" src="{{asset($image)}}" alt="The Image Will Be Loaded Shortly">
                                 </div>
                                @endforeach
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

                    @elseif($record->cover_selection=='embedded')
                        <iframe
                            style="height: 450px;"
                            id="display-embedded"
                            class="cover-image profile-picOne img-fluid"
                            src="{{'https://www.youtube.com/embed/'.$record->cover_embed}}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        >
                        </iframe>

                    @else
                    <img id="display" src="{{asset(($record->cover_image?$record->cover_image:'assets/front/images/cover.jpg'))}}"  class="cover-image profile-picOne img-fluid" >
                    @endif
                @endif
{{--                </div>--}}
                @guest
                @else
                    <div class="overlay">
                        <form id="filecover_image" action="" method="post" enctype="multipart/form-data">
                            <div class="icon dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownCover" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-pencil"></i> Edit Cover
                                </button>
                                <div class="dropdown-menu bg-dark p-2" aria-labelledby="dropdownCover">
                                    @foreach([['Upload Cover Photo','upload-buttonOne','fas fa-image','image'],
                                              ['Upload Video','upload-cover-video','fas fa-video-camera','video'],
                                              ['Upload Slideshow Photos','upload-slideshow','fas fa-sliders','slideshow'],
                                              ['Embedded Video URL','upload-embedded','fas fa-chain','embedded']] as $action)
                                        <li class="dropdown-item text-danger p-2 @php echo $action[3]=='video' && auth()->user()->subscription_status!=1 ? 'text-muted disabled' : '' @endphp  {{$action[1]}}">
                                            <i class="{{$action[2]}}"></i> {{$action[0]}}
                                        </li>
                                    @endforeach
                                </div>
                            </div>
                            <span class="icon" title="User Profile" style="display: none">
                                <i class="fas fa-image upload-buttonOne"></i>
                                <input class="file-uploadOne" id="cover_image" name="cover_image" type="file" accept="image/*">
                                <input name="cover_top" type="hidden" value="0" />
                                <span class="text">Update Cover Photo</span>
                            </span>
                        </form>
                        <span style="display: none">
                            <form id="video_Form" method="post" action="{{route('upload-cover-video',auth()->user()->id)}}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <input class="file-upload-video" id="cover_video" name="cover_video" type="file" accept="video/*">
                            </form>

                            <form id="slideshow_Form" method="post" action="{{route('upload-slideshow',auth()->user()->id)}}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <input class="file-upload-slideshow" id="cover_slideshow" name="cover_slideshow[]" type="file" multiple accept="image/*">
                            </form>
                        </span>
                    </div>
                    @if($record->role_id==5||$record->role_id==7)
                        <a class="edit-profile-btn text-white" style="bottom: 50px" href="{{action("admin\DashboardController@index")}}"><i class="fas fa-arrow-left" ></i>  Back To Admin View</a>
                    @endif
                    <a class="edit-profile-btn" id="edit_profile" href="{{$record->role_id==5||$record->role_id==7?route('user.edit',$record->id):route('edit-profile',$record->id)}}"><i class="fas fa-edit"></i> Edit Public Profile </a>
{{--                    <button class="edit-profile-btn" id="pos" style="display: none; color: #fff" >Save Changes </button>--}}
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

                        @guest
                            <button type="button" class="btn btn-default saveContact link" data-toggle="modal" data-target="#saveToCotacts">
                                SAVE TO CONTACTS <i class="fas fa-download"></i>
                            </button>
                        @else
                            <button type="button" class="btn btn-default saveContact link my_contacts" data-toggle="modal" data-target="#myCotacts">
                                MY CONTACTS <i class="fas fa-eye"></i>
                            </button>
                        @endguest
{{--                        <a class="btn btn-default saveContact link" href="{{route('vcards',['action' => 'export', 'id' => $record->id])}}"> SAVE TO CONTACTS <i class="fas fa-download"></i></a>--}}
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



    <!--Mobile Cropping Modal -->
    <div class="modal fade" id="cropModal2" tabindex="-1" role="dialog" aria-labelledby="cropModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #be0103;">
                    <h5 class="modal-title text-light" id="croptitle2">Drag To Adjust</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0px">
                    <img  id="cropper2" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary back_profile_pic2" data-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-danger save_profile_pic2"  style="background-color: #be0103;">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{--END Mobile Cropping Modal--}}


    {{--     Mobile   Save Contacts Modal --}}




    <!--  Modal -->
    <div class="modal fade" id="saveToCotactsmob" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="meetFormMob" method="POST">
                    <div class="modal-header" style="background-color: #be0103;">
                        <h5 class="modal-title text-white" id="exampleModalLongTitle">To stay in touch - may I have your contact Info as well?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 pt-2">
                                <input type="text" placeholder="Enter Our 1st Meeting Location" name="meeting_location" class="form-control" />
                            </div>
                            <div class="col-12 pt-2">
                                <input type="text" placeholder="Your First Name" name="first_name" class="form-control" />
                            </div>
                            <div class="col-12 pt-2">
                                <input type="text" placeholder="Your Last Name" name="last_name" class="form-control" />
                            </div>
                            <div class="col-12 pt-2">
                                <input type="email" placeholder="Your E-mail" name="email" class="form-control" />
                            </div>
                            <div class="col-12 pt-2">
                                <input type="text" placeholder="Your Phone Number" name="phone_number" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-lg mr-auto close_meet_mob" data-dismiss="modal" >Close</button>
                        <a class="btn btn-danger btn-lg bypass_contact_mob" style="background-color: #be0103;"  href="{{route('vcards',['action' => 'export', 'id' => $record->id])}}"> Bypass </a>
                        <button type="submit" class="btn btn-danger btn-lg continue_contact_mob" data-id="{{$record->id}}" style="background-color: #be0103;">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{--    Mobile    End Save Contacts Modal--}}


    {{--    Video Url Modal   --}}
    @if(auth()->check())
        <div class="modal fade" id="embeddedModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="post" action="{{route('upload-embedded',auth()->user()->id)}}">
                        @method('patch')
                        <div class="modal-header">
                            <h5 class="modal-title text-danger" id="exampleModalLongTitle">Embedded Video URL</h5>
                            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label for="embedded_url">Enter Video URL</label>
                                <input type="text" class="form-control" name="embedded_url" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Save changes</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endif
    {{--    End Video Url Modal    --}}


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
                        <div class="col-6"><p style="color: #fff;">Save Changes</p></div>
                        <div class="col-5">
                            <button class="save" id="pos2">Save</button>
                        </div>
                    </div>
                </div>
{{--                <div id="con">--}}
                    {{--                    --}}

                @if (isset($companyInfo) && ($record->cover_image=="" && $record->cover_video=="" && $record->cover_slideshow=="" && $record->cover_embed==""))
                    @if($companyInfo->cover_selection=='video')
                        <video id="display-video" controls autoplay muted loop class="cover-image profile-picOne img-fluid" >
                            <source src="{{asset($companyInfo->cover_video)}}">
                        </video>

                    @elseif($companyInfo->cover_selection=='slideshow')
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @php $images=json_decode($companyInfo->cover_slideshow) @endphp
                                @foreach($images as $image)
                                    <div class="carousel-item {{$image==reset( $images )? 'active':''}}">
                                        <img style="height: 250px" class="d-block w-100 img-fluid" src="{{asset($image)}}" alt="The Image Will Be Loaded Shortly">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    @elseif($companyInfo->cover_selection=='embedded')
                        <iframe
                            style="height: 250px;"
                            id="display-embedded"
                            class="cover-image profile-picOne img-fluid"
                            src="{{'https://www.youtube.com/embed/'.$companyInfo->cover_embed}}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        >
                        </iframe>


                    @else
                        <img id="display2" src="{{asset(($companyInfo->cover_image?$companyInfo->cover_image:'assets/front/images/cover.jpg'))}}"  class="cover-image profile-picOne img-fluid"  >
                    @endif
                @else
                    @if($record->cover_selection=='video')
                        <video id="display-video" controls autoplay muted loop class="cover-image profile-picOne img-fluid embed-responsive-4by3">
                            <source src="{{asset($record->cover_video)}}">
                        </video>

                    @elseif($record->cover_selection=='slideshow')
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @php $images=json_decode($record->cover_slideshow) @endphp
                                @foreach($images as $image)
                                    <div class="carousel-item {{$image==reset( $images )? 'active':''}}">
                                        <img style="height: 250px" class="d-block w-100 img-fluid" src="{{asset($image)}}" alt="The Image Will Be Loaded Shortly">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    @elseif($record->cover_selection=='embedded')
                        <iframe
                            style="height: 250px;"
                            id="display-embedded"
                            class="cover-image profile-picOne img-fluid"
                            src="{{'https://www.youtube.com/embed/'.$record->cover_embed}}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        >
                        </iframe>

                    @else
                        <img id="display2" src="{{asset(($record->cover_image?$record->cover_image:'assets/front/images/cover.jpg'))}}"  class="cover-image profile-picOne img-fluid" >
                    @endif
                @endif
{{--                </div>--}}
                    @guest
                @else
                    <form id="filecover_imageTwo" action="" method="post" enctype="multipart/form-data">
                    <span class="icon" style="z-index: 1000" title="User Cover" id="upload">
                        <i class="fas fa-image" data-toggle="modal" data-target="#uploadSelection"></i>
                        <input class="file-uploadTwo" type="file" id="cover_image" name="cover_image" accept="image/*">
                         <input id="cover_top2" name="cover_top" type="hidden" value="0" />
                    </span>
                    </form>

                {{--Modal Upload--}}

                    <div class="modal fade" id="uploadSelection" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger" id="exampleModalLongTitle">Select Option</h5>
                                    <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="p-2">
                                        @foreach([['Upload Cover Photo','upload-buttonTwo','fas fa-image','image'],
                                                  ['Upload Video','upload-cover-video','fas fa-video-camera','video'],
                                                  ['Upload Slideshow Photos','upload-slideshow','fas fa-sliders','slideshow'],
                                                  ['Embedded Video URL','upload-embedded','fas fa-chain','embedded']] as $action)
                                            <li class="dropdown-item text-danger p-2 @php echo $action[3]=='video' && auth()->user()->subscription_status!=1 ? 'text-muted disabled' : '' @endphp  {{$action[1]}}">
                                                <i class="{{$action[2]}}"></i> {{$action[0]}}
                                            </li>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                {{--End Upload--}}

                    <a class="edit-profile-btn" id="edit_profile2" href="{{$record->role_id==5||$record->role_id==7?route('user.edit',$record->id):route('edit-profile',$record->id)}}"><i class="fas fa-edit"></i></a>
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
                        <p>{{ $record->job_title ?? '' }} <span>{{ isset($companyInfo) ? $companyInfo->company_name:$record->company_name ?? '' }}</span></p>
                    </div>
                    <div class="col-md-4 col-lg-3 wow fadeInRight">
                        <button type="button" class="btn btn-default saveContact link" data-toggle="modal" data-target="#saveToCotactsmob">
                            SAVE TO CONTACTS <i class="fas fa-download"></i>
                        </button>
{{--                        <a class="btn btn-default saveContact link" href="{{route('vcards',['action' => 'export', 'id' => $record->id])}}"> SAVE TO CONTACTS <i class="fas fa-download"></i></a>--}}
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

    <script src='https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.js'></script>




    <!-- DataTable -->
    <script src="{{asset('assets/admin/datatables/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/admin/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admin/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/pdfmake/build/vfs_fonts.js')}}"></script>



    <!-- script js-->
    <script src="{{asset('assets/front/js/profile.js')}}"></script>
    <script>



        $(document).ready(function () {

            $('.dropdown-toggle').dropdown();
            $('.carousel').carousel();

            //MeetModal JS

            $("#meetForm").submit(function (e) {
                e.preventDefault();
                if($("#meetForm input[name=first_name]").val() && $("#meetForm input[name=email]").val()){
                    $(".continue_contact").addClass("disabled");
                    var text=$(".continue_contact").text();
                    $(".continue_contact").text("Please Wait...");
                    $(".bypass_contact").addClass("disabled");
                    var formdata=$(this).serializeArray();
                    var data={};
                    formdata.forEach((item)=>{
                        data[item.name]=item.value;
                    });
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': `{{csrf_token()}}`
                        }
                    });
                    var id=$(".continue_contact").attr("data-id");
                    $.post(`{{url('/profile')}}/${id}/meet`,data,function (response) {
                        $(".continue_contact").removeClass("disabled");
                        $(".continue_contact").text(text);
                        $(".bypass_contact").removeClass("disabled");
                        $(".bypass_contact")[0].click();
                        js_success("An Email Has Been Sent");
                        $("#saveToCotacts").modal('hide');
                    }).catch(function (err) {
                        console.log(err);
                    });
                }else {
                    $(".bypass_contact")[0].click();
                    $("#saveToCotacts").modal('hide');
                }

            });

            $(".bypass_contact").click(function () {
                $("#saveToCotacts").modal('hide');
            });

            $('#saveToCotacts').on('hidden.bs.modal', function (e) {
               $(".modal-backdrop").remove();
               $("#meetForm").trigger('reset');
            });

            //END MeetModal JS


            //My Contacts

            var contactsDataTable=$("#contactsTable").DataTable({
                dom: "Blfrtip",
                buttons: [{
                    extend: "csv",
                    className: "btn-sm text-danger"
                }, {
                    extend: "excel",
                    className: "btn-sm text-danger"
                }],
                responsive: true,
                columns:[{data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'meeting_location', name: 'location'},
                    {data: 'date', name: 'date'},
                    {data: 'time', name: 'time'},
                    {data: 'action', name: 'action'}
                ]
            });

            var updateContactTable=(data)=>{
                contactsDataTable.clear().draw();
                contactsDataTable.rows.add(data.data);
                contactsDataTable.columns.adjust().draw();
            }

            $('.my_contacts').click(function () {
                $.get(`{{route('my_contacts')}}`,function (data) {
                    updateContactTable(data);
                    $("#contactsModal").modal("show");
                }).catch(function (err) {
                    console.log(err);
                });
            });

            $(document).on('click','.delete_contact',function () {
                var id=$(this).attr("id");
                $.ajax({
                    type:'delete',
                    url:`{{url("profile/contacts/destroy")}}/${id}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function (data) {
                        js_success("Deleted Successfully.");
                        updateContactTable(data);
                    },
                    error:function (err) {
                        console.log(err);
                    }
                })
            });

            //End MyContacts


            // function adjust(){
            //
            //     if(window.innerWidth>=1200){
            //         $("#display2").css({"top":top});
            //     }
            //     if(top<0){
            //     if(window.innerWidth<=992){
            //         $("#display").css({"top":top+20});
            //     }}
            //     if(top2<0){
            //     if(window.innerWidth<768){
            //         $("#display2").css({"top":top2+(-top2)*0.5});
            //     }
            //     if(window.innerWidth<500){
            //         $("#display2").css({"top":top2+(-top2)*0.7});
            //     }
            //     if(window.innerWidth<400){
            //         $("#display2").css({"top":top2+(-top2)*0.8});
            //     }}
            // }
            // var image=$("#display");
            // var image2=$("#display2");
            // var top=parseInt(image.css("top"));
            // var top2=parseInt(image2.css("top"));
            var rawImage;
            var rawCoverImage;
            var whichPic;
            // adjust();
            // window.onresize=function(){
            //     adjust();
            // };

            //croppie
            var profile_crop=$("#cropper").croppie();


            // var cover_crop = $("#cropper").croppie({
            //     enableExif: true,
            //     mouseWheelZoom:'ctrl',
            //     enforceBoundary: false,
            //     viewport: {
            //         width: 343.2,
            //         height: 126,
            //         type: 'square'
            //     },boundary:{
            //         height: 400
            //     }
            // });

            $('#cropModal').on('shown.bs.modal', function(){
                profile_crop.croppie('destroy');
                profile_crop=$("#cropper").croppie({
                    enableExif: true,
                    mouseWheelZoom:'ctrl',
                    boundary:{
                        height:400
                    },
                    viewport:{
                        height:whichPic=="cover"?126:300,
                        width:whichPic=="cover"?343.2:300,
                        type:whichPic=="cover"?'square':'circle'
                    }
                });
                if(whichPic=="cover"){
                    profile_crop.croppie('bind',{
                       url:rawCoverImage
                    });
                }else{
                    profile_crop.croppie('bind',{
                        url:rawImage
                    });
                }

            });

            $(document).on('change', '.file-upload', function () {
                var reader=new FileReader();
                reader.onload=function(eve){
                    rawImage=eve.target.result;
                };
                reader.readAsDataURL(this.files[0]);
                whichPic="profile";
                $("#cropModal").modal('show');
            });

            $('.save_profile_pic').on('click',function () {
                $("#croptitle").text("Saving....");
                $(this).attr("disabled",true);
                $('.back_profile_pic').attr("disabled",true);
                //let forms = document.querySelector('#fileprofile_picture');
                if(whichPic=="cover"){
                    profile_crop.croppie("result",{
                        type: 'canvas',
                        size: {height:420,width:1144},
                        quality:1
                    }).then((data)=>{
                        $.ajax({
                            url: "{{ route('upload-cover-pic', request()->segment(2) ) }}",
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {"cover_image":data},
                            // contentType: false,
                            // processData: false,
                            success: function (data) {
                                window.location.reload();
                            }
                        });
                    });
                }else{
                    profile_crop.croppie("result")
                        .then((data)=>{
                            $.ajax({
                                url: "{{ route('upload-profile-pic', request()->segment(2) ) }}",
                                type: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {"profile_picture":data},
                                // contentType: false,
                                // processData: false,
                                success: function (data) {
                                    window.location.reload();
                                },
                                error:function (err) {
                                    console.log(err);
                                }
                            });
                        });
                }


            });


            function setImage(){
                var reader=new FileReader();
                reader.onload=function(eve){
                    // image.attr("src",eve.target.result);
                    rawCoverImage=eve.target.result;
                };
                reader.readAsDataURL($(".file-uploadOne")[0].files[0]);
            }

            // function setImage2(){
            //     var reader=new FileReader();
            //     reader.onload=function(eve){
            //         image2.attr("src",eve.target.result);
            //     };
            //     reader.readAsDataURL($(".file-uploadTwo")[0].files[0]);
            // }

            // $(document).on('change', '.file-uploadOne', function () {

                // $("#edit_profile").css({"display":"none"});
                // $("#pos").css({"display":"block"});
                // $("#edit_profile").css({"display":"none"});
                // $(".overlay").css({"display":"none"});
                //image.css({"top":0});
                //image.css({"top":-121});
                // setImage();
                // whichPic="cover";
                // $("#cropModal").modal('show');
                // image.draggable({
                //
                //     axis:'y',
                //     cursor:'move',
                //     drag:function(event,ui){
                //
                //         var diff=ui.helper[0].clientHeight-ui.helper[0].parentNode.clientHeight;
                //         if(ui.position.top>0)ui.position.top=0;
                //         else if(-ui.position.top>=diff)ui.position.top=-diff;
                //         $('[name="cover_top"]').val(ui.position.top);
                //     }
                // });
            // });

            {{--$("#pos").click(function () {--}}
            {{--    let forms = document.querySelector('#filecover_image');--}}
            {{--    $(this).attr("disabled",true);--}}
            {{--    $(this).text("Saving....");--}}

            {{--    $.ajax({--}}
            {{--        url: "{{ route('upload-cover-pic', request()->segment(2) ) }}",--}}
            {{--        type: "post",--}}
            {{--        headers: {--}}
            {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--        },--}}
            {{--        data: new FormData(forms),--}}
            {{--        contentType: false,--}}
            {{--        processData: false,--}}
            {{--        success: function (data) {--}}
            {{--            window.location.reload();--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}





            // var readURL = function (input) {
            //     if (input.files && input.files[0]) {
            //         var reader = new FileReader();
            //
            //         reader.onload = function (e) {
            //             $('.profile-picOne').attr('src', e.target.result);
            //         }
            //
            //         reader.readAsDataURL(input.files[0]);
            //     }
            // }

            $(".file-uploadOne").on('change', function () {
                //readURL(this);
                setImage();
                whichPic="cover";
                $("#cropModal").modal('show');
            });

            $(".upload-buttonOne").on('click', function () {
                $(".file-uploadOne").click();
            });

            //Video Upload
            $('.upload-cover-video').on('click',function () {
                $('.file-upload-video').click();
            });

            $('#cover_video').on('change',function () {
                $('#video_Form').submit();
            });

            //SlideShow Upload
            $('.upload-slideshow').on('click',function () {
                $('.file-upload-slideshow').click();
            });

            $('#cover_slideshow').on('change',function () {
                $('#slideshow_Form').submit();
            });
            //embedded youtube video
            $('.upload-embedded').on('click',function () {
                $("#uploadSelection").modal('hide');
                $('#embeddedModal').modal('show');
            });
        });
        $(document).ready(function () {
            // var readURL = function (input) {
            //     if (input.files && input.files[0]) {
            //         var reader = new FileReader();
            //         reader.onload = function (e) {
            //
            //             //$('.profile-pic').attr('src', e.target.result);
            //             // console.log(e.target.result);
            //         }
            //
            //         reader.readAsDataURL(input.files[0]);
            //     }
            // }
            //
            // $(".file-upload").on('change', function () {
            //     readURL(this);
            // });

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
                $('#uploadSelection').modal('hide');
                $(".file-uploadOne").click();
            });
        });
        $(document).ready(function () {


            //Mob MeetModal JS

            $("#meetFormMob").submit(function (e) {
                e.preventDefault();
                if($("#meetFormMob input[name=first_name]").val() && $("#meetFormMob input[name=email]").val()){
                    $(".continue_contact_mob").addClass("disabled");
                    var text=$(".continue_contact_mob").text();
                    $(".continue_contact_mob").text("Please Wait...");
                    $(".bypass_contact_mob").addClass("disabled");
                    var formdata=$(this).serializeArray();
                    var data={};
                    formdata.forEach((item)=>{
                        data[item.name]=item.value;
                    });
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': `{{csrf_token()}}`
                        }
                    });
                    var id=$(".continue_contact_mob").attr("data-id");
                    $.post(`{{url('/profile')}}/${id}/meet`,data,function (response) {
                        $(".continue_contact_mob").removeClass("disabled");
                        $(".continue_contact_mob").text(text);
                        $(".bypass_contact_mob").removeClass("disabled");
                        $(".bypass_contact_mob")[0].click();
                        js_success("An Email Has Been Sent");
                        $("#saveToCotactsmob").modal('hide');
                    }).catch(function (err) {
                        console.log(err);
                    });
                }else {
                    $(".bypass_contact_mob")[0].click();
                    $("#saveToCotactsmob").modal('hide');
                }

            });

            $(".bypass_contact_mob").click(function () {
                $("#saveToCotactsmob").modal('hide');
            });

            $('#saveToCotactsmob').on('hidden.bs.modal', function (e) {
                $(".modal-backdrop").remove();
                $("#meetFormMob").trigger('reset');
            });

            // Mob END MeetModal JS






            var profile_crop=$("#cropper2").croppie();
            var rawImage,whichPic,rawCoverImage;

            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        //$('.profile-picThree').attr('src', e.target.result);
                        rawImage=e.target.result;
                    };
                    whichPic="profile";
                    reader.readAsDataURL(input.files[0]);
                    $("#cropModal2").modal('show');

                }
            }

            $('.save_profile_pic2').on('click',function () {
                $("#croptitle2").text("Saving....");
                $(this).attr("disabled",true);
                $('.back_profile_pic2').attr("disabled",true);
                //let forms = document.querySelector('#fileprofile_picture');
                if(whichPic=="cover"){
                    profile_crop.croppie('result',{
                        type: 'canvas',
                        size: {height:420,width:1144},
                        quality:1
                    }).then((data)=>{
                        $.ajax({
                            url: "{{ route('upload-cover-pic', request()->segment(2) ) }}",
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {"cover_image":data},
                            // contentType: false,
                            // processData: false,
                            success: function (data) {
                                window.location.reload();
                            }
                        });
                    });
                }
                else {
                    profile_crop.croppie("result")
                        .then((data) => {
                            $.ajax({
                                url: "{{ route('upload-profile-pic', request()->segment(2) ) }}",
                                type: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {"profile_picture": data},
                                // contentType: false,
                                // processData: false,
                                success: function (data) {
                                    window.location.reload();
                                },
                                error: function (err) {
                                    console.log(err);
                                }
                            });
                        });
                }

            });


            $('#cropModal2').on('shown.bs.modal', function(){
                profile_crop.croppie('destroy');
                profile_crop=$("#cropper2").croppie({
                    enableExif: true,
                    mouseWheelZoom:'ctrl',
                    boundary:{
                        height:400
                    },
                    viewport:{
                        height:whichPic=="cover"?126:300,
                        width:whichPic=="cover"?343.2:300,
                        type:whichPic=="cover"?'square':'circle'
                    }
                });
                if (whichPic=="cover"){
                    profile_crop.croppie('bind',{
                        url:rawCoverImage
                    });
                }else {
                    profile_crop.croppie('bind', {
                        url: rawImage
                    });
                }
            });

            function setImage2(){
                var reader=new FileReader();
                reader.onload=function(eve){
                    //image2.attr("src",eve.target.result);
                    rawCoverImage=eve.target.result;
                };
                reader.readAsDataURL($(".file-uploadTwo")[0].files[0]);
            }

            $(document).on('change', '.file-uploadTwo', function () {

                // $("#edit_profile2").css({"display":"none"});
                // $("#save_container").css({"display":"block"});
                // $("#upload").css({"display":"none"});
                // image2.css({"top":0});
                // setImage2();
                // image2.draggable({
                //     axis:'y',
                //     cursor:'move',
                //     drag:function(event,ui){
                //
                //         var diff=ui.helper[0].clientHeight-ui.helper[0].parentNode.clientHeight;
                //         if(ui.position.top>0)ui.position.top=0;
                //         else if(-ui.position.top>=diff)ui.position.top=-diff;
                //         $('#cover_top2').val(ui.position.top);
                //     }
                // });

                whichPic="cover";
                setImage2();
                $("#cropModal2").modal('show');
            });



            {{--$("#pos2").click(function () {--}}
            {{--    let forms = document.querySelector('#filecover_imageTwo');--}}
            {{--    $("#save_text").empty();--}}
            {{--    $("#save_text").append("<p class='text-center text-light'>Saving...</p>");--}}
            {{--    $.ajax({--}}
            {{--        url: "{{ route('upload-cover-pic', request()->segment(2) ) }}",--}}
            {{--        type: "post",--}}
            {{--        headers: {--}}
            {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--        },--}}
            {{--        data: new FormData(forms),--}}
            {{--        contentType: false,--}}
            {{--        processData: false,--}}
            {{--        success: function (data) {--}}
            {{--            window.location.reload();--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}

            $(".file-uploadThree").on('change', function () {
                readURL(this);
            });

            $(".upload-buttonThree").on('click', function () {
                $(".file-uploadThree").click();
            });
        });
    </script>
@endsection
