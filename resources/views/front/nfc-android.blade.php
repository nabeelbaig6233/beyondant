@extends('front.layout.app')
@section('pageMeta')
    <meta name="title" content="NFC Android Phone | Android Devices NFC Service">
    <meta name="description" content="Offering  Near Field Communication for all android devices. We have android nfc service, nfc android phone & nfc devices android.">
@endsection
@section('pageCss')
    <!-- Custom css -->
    <link href="{{asset('assets/front/css/home.min.css')}}" rel="stylesheet" type="text/css">
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

                                <div class="trans-u float-right">
                                    <div id="google_translate_element">

                                    </div>
                                </div>
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
                                        <h1 class="mainheadtop wow fadeInLeft link">With NFC You Can Transmute Your Ordinary Life</h1>
                                    </div>
                                    <div class="wow fadeInRight link">
                                        <p>
                                            Near field communication (NFC) is an advanced way of communication that allows you to communicate with customers efficiently. Nowadays, NFC has a bigger part to play in the global industry. It is available in almost every customer intensive sector including hotels and hospitals in the form of nfc service android. In the present time, almost all business companies are using NFC technology in various creative ways. If you have an nfc android phone, you can easily transfer information with the blink of an eye. Now almost every smartphone brand has NFC hardware. NFC technology can be used in various ways i.e. NFC stickers and NFC tags. You can program both NFC tags and NFC stickers according to your needs. By programming the stickers and tags you can control your home appliance using this amazing android nfc service. NFC stickers and tags can be acquired from online websites at a low cost. By using the NFC stickers, you can gain memberships and application options.  NFC technology not only works for your smartphones, but it can also be installed in your household appliances by simply ensconcing NFC tags and bracelets in them. Other than your homes, NFC technology can also be installed in your cars. With nfc devices android technology, you can lock, unlock, and start your car.</p>
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
                <div class="col-md-10 offset-md-1 ">
                    <div class="title">
                        <div class="main-title">
                            <h2 class="wow fadeInDown">Smart Payments Through NFC Technology</h2>
                            <img src="{{asset('assets/front/images/')}}/red-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                            <p class="wow fadeInRight">The android nfc service and technology can be used for various reasons e.g. in the packaging industry. But, on the other hand, NFC also provides its customers the opportunity to transfer money without coming in contact with the receiver. For this, you have to invest in NFC smart cards through which you can make secure cashless credit card payments. These smart cards are designed specially to ease the process of business transactions, paying bills, and purchasing of goods.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 offset-md-1 ">
                    <div class="title">
                        <div class="main-title">
                            <h2 class="wow fadeInDown">How NFC Tags Work</h2>
                            <img src="{{asset('assets/front/images/')}}/red-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                            <p class="wow fadeInRight">
                                In phone to phone communications, the NFC tags work to store information such as contact details, email address, etc. it also includes short text and links of Google play apps. The nfc android phone with NFC tags, works without electric supply, these are basically passive readers which depend on active devices. These passive readers send information to the active devices for example your smartphones or android nfc services enabled devices. The NFC tags work through the magnetic field which is generated by the active devices.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 offset-md-1 ">
                    <div class="title">
                        <div class="main-title">
                            <h2 class="wow fadeInDown">How To Enable NFC android phone services in Your Smartphones</h2>
                            <img src="{{asset('assets/front/images/')}}/red-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                            <p class="wow fadeInRight">There are just two things that you need to enable NFC android phone service in your smartphones. First is your smartphone and the other is the NFC tag. You do not have to worry about installing the NFC technology because nowadays almost every smartphone has NFC hardware in it. In order to activate it, you need to open the NFC setting on your phones and change the setting to program the NFC tags. After changing the settings, you can use the programmed tags though NFC bracelets and your smartphones.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
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
                    <h2 class="wow fadeInLeft">Beyondant Digital Business Cards with NFC Technology</h2>
                    <img src="{{asset('assets/front/images/')}}/white-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                    <p class="wow fadeInRight">There is no doubt that the rapidly growing technological inventions have changed all traditional ways of life. Similarly, new digital business cards have replaced the old-fashioned paper business cards. Here at Beyondant, you can have your own digital business cards that permit you to share the given information with your customers. Instead of handing over your business card to the customers, just swipe it against the NFC enabled smartphones. By Swiping the card in NFC devices, your contact information will be transferred to the other person in just a few seconds.
                        <br/>At Beyondant, you can make your own digital business card in just a few steps. We provide you smart business cards with NFC technology at a low cost. By using these cards, you can read and transfer contact information through smartphones. This way you have the advantage of transferring the data fast and with ease.
                    </p>
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
                        <h2 class="wow fadeInLeft">Enhance Security with NFC Technology</h2>
                        <img src="{{asset('assets/front/images/')}}/red-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                        <p class="wow fadeInRight">NFC service android technology is used at every place nowadays from digital business cards to door locks. This is the smartest technology that can be used efficiently for security purposes. In the present times, verification of identities is required for every purpose. To get entry into an event, hotel, or company, you first need to verify the identity of the guests. It is a lengthy and time taking procedure but with NFC technology it has been made easier. Using your NFC stickers, you can send invitations to everyone. The receiver with the NFC enabled smartphones and NFC bracelets can have the details of the event.
                           <br/> On the other hand, you can verify the identity of the invited guests by reading their digital business cards. Using the NFC technology, the security team can scan and check the invited guests’ identities. This is not only convenient for the organizers, but also for the guests. Beyondant helps his customers by providing the facility of NFC technology digital business cards through which they can easily share their information with the event organizers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="createDesign_img" style="background-image: url('{{ $home->section_image5 ?? '' }}')"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Design End -->




    <!-- Footer Start -->
    <footer class="bayondantFooter cursor-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <h2 class="wow fadeInLeft">Affiliates
                            <br/>
                            <a href="{{route('entrepreneurs')}}" style="font-size: 18px;font-family: 'Source Sans Pro',sans-serif;color: #be0103;
    text-decoration: underline;">Application</a>
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
                    <div class="row col-12 wow bounceInRight" id="footer_links">
                        <ul>
                            <li><a href="{{route('nfc-android')}}" target="_blank">NFC Android</a></li>
                            <li><a href="{{route('nfc-business-cards')}}" target="_blank">Business Cards</a></li>
                        </ul>
                    </div>
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
