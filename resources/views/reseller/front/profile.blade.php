@extends('reseller.front.layout.app')
@section('title') Reseller Profile @endsection
@section('pageCss')
    <link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel='stylesheet prefetch' href='https://foliotek.github.io/Croppie/croppie.css'>
    <link rel="stylesheet" href="{{asset('assets/reseller/front/css/profile.css')}}">
@endsection
{{--Content--}}
@section('content')
    <div class="container-fluid asd">
    {{--    Header --}}

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
                        <img id="cropper"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary back_profile_pic" data-dismiss="modal">Back</button>
                        <button type="button" class="btn btn-danger save_profile_pic" style="background-color: #be0103;">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Share your QR Code</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" id="qrcode">
                        @csrf
                    <div class="modal-body">
                        <input type="hidden" value="{{ $reseller->id ?? '' }}" id="reseller_id" name="reseller_id">
                        <input type="hidden" id="qrcode" value="{{ asset('assets/uploads/reseller/'.$reseller->id.'.png') ?? '' }}" name="qrcode">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Email" required name="qr_email" id="qr_email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close_individual" class="btn btn-secondary close" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger" id="share">Share</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    {{--END Cropping Modal--}}

    @if(!Auth::guard('reseller')->check())
        {{-- Start a Business Modal --}}
        <!-- Modal -->
            <div class="modal fade" id="businessModal" tabindex="-1" role="dialog" aria-labelledby="businessModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="businessModalTitle">Start a Business</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <a href="{{route('referral.reseller',$reseller->id)}}" class="btn btn-danger button-red text-white">Become a Reseller</a>
                            <a href="https://beyondant-products.com/collections/all?discount={{$reseller->discount_code}}" target="_blank" class="btn btn-danger button-red text-white">Buy Our Products</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Start a Business Modal --}}
        @endif

        <div class="row header">
            {{-- Language Selection --}}
            <div class="offset-lg-1 col-lg-2">
                <div class="language"><i class="fa fa-globe"></i>
                    <p id="google_translate_element" class="translate"></p></div>
            </div>
            <div class="col-lg">
                <a href="{{ asset('assets/uploads/reseller/'.$reseller->id.'.png') ?? '' }}" download="QR" class="btn bg-danger text-light"><i class="fa fa-download"></i></a>
                <button type="button" data-toggle="modal" data-target="#myModal" class="btn bg-light text-dark"><i class="fa fa-share"></i></button>
            </div>
            {{-- End Language Selection --}}
            {{-- Authorized Reseller Column--}}
            <div class="offset-lg-3 col-lg-5 pt-3">
                <div class="authorized-reseller">
                    <img src="{{asset($reseller->profile_picture?$reseller->profile_picture:'assets/reseller/front/images/profile.jpg')}}" id="pro_pic"/>
                    @if(auth()->guard('reseller')->user())
                        <form id="fileprofile_picture" action="" method="post" enctype="multipart/form-data" style="display: none">
                            <input class="file-upload" type="file" id="profile_picture" name="profile_picture" accept="image/*">
                        </form>
                    @endif
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
                        <span class=""><i class="fa fa-bars text-white"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            {{--                            <li class="nav-item active">--}}
                            {{--                                <a class="nav-link" href="#">Shop Devices</a>--}}
                            {{--                            </li>--}}
                            <li class="nav-item">
                                <a class="nav-link {{auth()->guard('reseller')->check()?'disabled':''}}" href="#" id="startBusinessTrigger">Start a Business</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Why Beyondant</a>
                            </li>
                        </ul>
                    </div>
                    <span class="navbar-text text-white">
                      <i class="fa fa-phone p-2 mr-2"></i>{{$reseller->business_phone}}
                        @if(auth()->guard('reseller')->check())
                            <a class="btn btn-light button-white text-dark" href="{{route('reseller.admin.edit')}}"><span class="font-weight-bold">Edit Profile</span></a>
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger button-red text-white"><span class="font-weight-bold">Logout</span></a>
                            <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none"><input type="hidden" name="_token" value="{{csrf_token()}}"></form>
                        @endif
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
                        {{--                        <div class="carousel-item">--}}
                        {{--                            <div class="overlay"></div>--}}
                        {{--                            <img class="img-fluid" src="{{asset('assets/reseller/front/images/slider.jpg')}}" alt="Third slide">--}}
                        {{--                            <div class="carousel-caption">--}}
                        {{--                                <h1 class="display-1 text-uppercase">Let’s Put In The Work & Build Business Success!</h1>--}}
                        {{--                                <div class="carousel-caption-buttons">--}}
                        {{--                                    <a class="btn button-red font-weight-bold" href="#">--}}
                        {{--                                        <span class="pl-2 pr-2">Join Free</span>--}}
                        {{--                                    </a>--}}
                        {{--                                    <a class="btn button-blue" href="#">--}}
                        {{--                                        <span class="pl-4 pr-4">Log In</span>--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
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
                                <p class="email">{{$reseller->email}}</p>
                                <p class="phone-number">{{$reseller->business_phone}}</p>
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
            @media (max-width: 767px) {
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
                .header .button-red {
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

            .navbar-toggler {
                border: 1px solid #ffffff;
            }

        </style>
        {{--  Footer End's  --}}
    </div>
@endsection
{{--End Content--}}
@section('pageJs')
    <script>
        $(document).ready(function () {
            $("#startBusinessTrigger").click(function () {
                $("#businessModal").modal('show');
            });

            let form = document.getElementById('qrcode');
            //     async function postData(url = '', data = {})
            form.addEventListener('submit',(e) => {
                e.preventDefault();
                let email = form.elements['qr_email'].value;
                let reseller_id = form.elements['reseller_id'].value;
                let qrcode = form.elements['qrcode'].value;
                async function QrCode(url = '', data = {}) {
                    const response = await fetch(url, {
                        method: 'POST',
                        cache: 'no-cache',
                        //credentials: 'same-origin', //include, * same-origin, omit
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify(data)
                    });
                    return response.json();
                }
                QrCode("{{ route('reseller.qrcode',request()->segment(3)) }}",{ email: email, reseller_id: reseller_id, qrcode: qrcode})
                    .then(data => {
                        console.log(data);
                    })
            })
        });
    </script>
    @if(auth()->guard('reseller')->user())
        <script src="{{asset('assets/front/js/jquery.ui.touch-punch.min.js')}}"></script>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.js'></script>
        <script>
            $(document).ready(function () {
                //Profile Cropping Code
                var rawImage;
                var profile_crop = $("#cropper").croppie();
                $('#cropModal').on('shown.bs.modal', function () {
                    profile_crop.croppie('destroy');
                    profile_crop = $("#cropper").croppie({
                        enableExif: true,
                        mouseWheelZoom: 'ctrl',
                        boundary: {
                            height: 400
                        },
                        viewport: {
                            height: 300,
                            width: 300,
                            type: 'circle'
                        }
                    });
                    profile_crop.croppie('bind', {
                        url: rawImage
                    });
                });

                $(document).on('change', '.file-upload', function () {
                    setImage();
                    $("#cropModal").modal('show');
                });

                function setImage() {
                    var reader = new FileReader();
                    reader.onload = function (eve) {
                        // image.attr("src",eve.target.result);
                        rawImage = eve.target.result;
                    };
                    reader.readAsDataURL($(".file-upload")[0].files[0]);
                }

                $("#pro_pic").click(function () {
                    $(".file-upload").trigger("click");
                });

                $('.save_profile_pic').on('click', function () {
                    $("#croptitle").text("Saving....");
                    $(this).attr("disabled", true);
                    $('.back_profile_pic').attr("disabled", true);
                    //let forms = document.querySelector('#fileprofile_picture');

                    profile_crop.croppie("result").then((data) => {
                        $.ajax({
                            url: "{{ route('reseller.profile.pic') }}",
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': '{{csrf_token()}}'
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
                });

                //    End Profile Cropping Code





            });
        </script>
    @endif
@endsection
