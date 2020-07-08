@extends('front.layout.app')
@section('pageMeta')
    <meta name="title" content="NFC Tag Business Cards | NFC Business Card Digital">
    <meta name="description" content="We provide the best business card digital, nfc business card and nfc tag business cards. We have the latest nfc business cards available.">
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
                                        <h1 class="mainheadtop wow fadeInLeft link">Digitalization in Modern Businesses</h1>
                                    </div>
                                    <div class="wow fadeInRight link">
                                        <p>
                                            What is the new ‘normal’ for businesses and companies as the global pandemic extends and stretches on? Whether there were a pandemic or not, the modern times have revolutionized and innovated today’s business world. Regardless of the size of the business; whether it is a small, medium, or large- the digital transformation has become of vital importance to all businesses. The advancement of digital technologies and the internet has changed the way businesses operate. There has been a shift from traditional mode of business management and operation to the modern and an overly technology oriented methods of operation like digital and NFC business card and what not. Implementation of technological advancements and infrastructure has a huge impact on the efficiency, relationships, and culture of a business. It brings both, tangible and intangible advantages that not only help you make money, but also meet customer expectations and produce the results of their demand.
                                        </p>
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
                            <h2 class="wow fadeInDown">Digital Business Card</h2>
                            <img src="{{asset('assets/front/images/')}}/red-line.jpg" class="m-t-20 m-b-20 wow fadeInLeft">
                            <p class="wow fadeInRight">Since the last decade, there has been a huge change in the business world. The technology driven change has now accelerated its pace, especially with the ongoing pandemic which is not to end anytime soon. Needless to say, customer expectations have risen with exponential growth in the range and amount of technology that is available nowadays.
                                <br/><br>One of the financially savvy approaches to attract customers' attention is to distribute business cards. You can now create customized NFC tag business cards for every employee with Beyondant. Our platform makes it simpler to design cards. You can create whatever you want in no time! Not only that, but our solution is in high demand because it is easy, fast and works seamlessly with ironclad security features with just a smartphone tap on any of our devices, thereby eliminating the need for physical exchanges. Use our NFC tag business cards to eliminate the physical contact and risk of getting infected with Covid-19 as a result of physical exchange of paper business cards. You can now enable and ensure secure online shopping and create loyalty programs with the use of our Custom cards, Bracelets tags, stickers and other NFC enabled devices and give a boom to your business and social presence.
                                <br/><br>One can choose his own preference of space, colour, space, logo, picture, typeface, so on and forth. These components come together to have the ideal and desired effect. The impression given by these business cards stays at the rear of the customers' mind and forms some perception and recognition about the brand.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 offset-md-1 ">
                    <div class="title">
                        <div class="main-title">
                            <h2 class="wow fadeInDown"><strong>Why Choose Digital Business Card?</strong></h2>
                            <p class="wow fadeInRight">
                                Let us enlighten you with why business cards despite everything hold incredible significance even as the business world keeps on changing at an instantaneous rate. Be it a physical business card in the form of paper, or a digital business card, both hold a great significance in the business world. However, what you need to understand is that keeping the current situation all around the world, there is going to be major changes in the business world in the coming times. In fact, the changes have already started to take place. There have already been implementation of digitalization and use of advanced technologies in businesses today. However, this embracing of modern technology was only to some extent. With the global pandemic continuing to exist for a longer time with no certainty of when it would end, the importance of digital business cards has significantly and rapidly increased.
                                <br><br>In today’s times, there are innumerable advanced digital resources that are being used to share business data with NFC business card being on the top. The development of smartphones has made it much easier to share data quickly rather than having carry cards around and trade it.
                                <br><br>Paper business cards that are often not put to use appropriately in light of the fact that they are easy to lose, hard to find when required, or they contain insignificant and obsolete information. Whereas digital business cards can be shared way more easily, searched on a single platform when required and safely stored. Not just that, but digital business cards keep automatically updating the individuals in your network regarding the changes that are made in your business contact data and the other way around. Unlike paper business cards, digital business do not require reprinting when any kind of changes are to be made. These are definitely far cheaper than the latter as they require no excessive printing, designing and reprinting.
                                <br><br>We offer you peace of mind in your nfc business card and business card digital designing smoothly from scratch and taking all your stress away! With our combined years of experience, we take pride in our work and push boundaries to provide our clients the ultimate satisfaction. Beyondant, being a remarkable platform, serves business of all industries as well as everyday consumers. It takes only a few seconds to digitally share social media profiles, contact details, internet marketing information, corporate web site or any other relevant online information. It is our vision to become a recognized leading digital business card creator firm, hence your trust and differentiation is our responsibility.
                                <br><br>Creating digital business cards assists with growing your business at a quicker pace. You do not need to bother with a visual originator to make an expert business card for you. You are at the right place. We have a brilliant collection of digital business card templates, and you can also get them custom made. You can now easily create your business card digital within seconds with our help. Beyondant makes sure that your customers remember you! Our cards are compatible with Android, iPhone, and tablets and desktop. We provide you with a smoother way to grow your business through networking and help in growing your social following. Hurry up and create your custom digital business cards with and us and boost your customer interaction despite social distancing. It is our job to cater to your needs with meticulous attention!

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- Grow Your Business End -->




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
