<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166321286-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-166321286-1');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset(($setting->favico)? $setting->favico :'assets/admin/images/favicon.ico')}}"
          type="image/ico"/>

    <title>{{$setting->title??""}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">

    @yield('page_css')

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{url('/')}}" class="site_title"><i class="fa fa-paw"></i>
                        <span>{{$setting->title??""}}</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset(Auth::user()->profile_picture)}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{Auth::user()->first_name." ".Auth::user()->last_name}}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Dashboard</h3>
                        <ul class="nav side-menu">
                            <li><a href="{{ url('/admin')}}"><i class="fa fa-home"></i> Dashboard </a>
                            </li>

                        </ul>
                    </div>
                    @if (in_array('viewUserProfile',\Request::get('permission'))||in_array('viewCompany',\Request::get('permission'))||in_array('viewIndividual',\Request::get('permission')))
                        <div class="menu_section">
                            <h3>Users Profile</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @if(in_array('viewUserProfile',\Request::get('permission')))
                                            <li><a href="{{route('profile')}}">Basic Profiles</a></li>
                                        @endif
                                        @if(in_array('viewCompany',\Request::get('permission')))
                                            <li><a href="{{route('company')}}">Company Profiles</a></li>
                                        @endif
                                        @if(in_array('viewIndividual',\Request::get('permission')))
                                            <li><a href="{{route('individual')}}">Multi-Device Profiles</a></li>
                                        @endif
                                    </ul>

                                </li>


                            </ul>
                        </div>
                    @endif

                    @if(in_array('viewUserProfile',\Request::get('permission')) && in_array('viewCompany',\Request::get('permission')) && in_array('viewIndividual',\Request::get('permission')))

                        <div class="menu_section">
                            <h3>Users</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-users"></i>Profile Search<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                            <li><a href="{{route('allProfiles')}}">Search</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </div>


                    @endif

                    @if (auth()->user()->role_id===5 || auth()->user()->role_id===7)
                        <div class="menu_section">
                            <h3>Profile</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-eye"></i> {{auth()->user()->role_id===5?"Company Profile":"My Public Profile"}} <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @if(in_array('viewContact',\Request::get('permission')))
                                            <li><a href="{{route('pro',auth()->user()->id)}}" target="_blank">View Profile</a></li>
                                        @endif
                                    </ul>

                                </li>


                            </ul>
                        </div>
                    @endif


                    @if (in_array('viewDevice',\Request::get('permission')))
                        <div class="menu_section">
                            <h3>My Devices</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-laptop"></i> Devices <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @if(in_array('viewDevice',\Request::get('permission')))
                                            <li><a href="{{route('device')}}">Devices</a></li>
                                        @endif
                                    </ul>

                                </li>


                            </ul>
                        </div>
                    @endif

                    @if (in_array('viewContact',\Request::get('permission')))
                        <div class="menu_section">
                            <h3>My Contacts</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-phone"></i> Contacts <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @if(in_array('viewContact',\Request::get('permission')))
                                            <li><a href="{{route('contact')}}">Contacts</a></li>
                                        @endif
                                    </ul>

                                </li>


                            </ul>
                        </div>
                    @endif




                    @if(in_array('viewHome',\Request::get('permission')))
                        <div class="menu_section">
                            <h3>CMS</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-clone"></i> CMS <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @if(in_array('viewHome',\Request::get('permission')))
                                            <li><a href="{{ route('admin.home') }}">Home</a>
                                        @endif
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    @endif

                    @if(in_array('viewBanner',\Request::get('permission')))
                        <div class="menu_section">
                            <h3>MARKETING</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bullhorn"></i> MARKETING <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @if(in_array('createBanner',\Request::get('permission')))
                                            <li><a href="{{ route('banner') }}">Banners</a>
                                        @endif
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    @endif


                    @if (in_array('viewReseller',\Request::get('permission')) || in_array('viewEntrepreneur',\Request::get('permission')))
                        <div class="menu_section">
                            <h3>Inquiry</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-clone"></i> Reseller <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @if (in_array('viewReseller',\Request::get('permission')))
                                            <li><a href="{{ route('admin.reseller') }}">Reseller</a>

                                        @endif
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-clone"></i> Entrepreneurs <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @if (in_array('viewEntrepreneur',\Request::get('permission')))
                                            <li><a href="{{ route('admin.entrepreneurs') }}">Entrepreneurs</a>
                                        @endif
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    @endif

                    @if(in_array('viewRole',\Request::get('permission')) || in_array('viewUser',\Request::get('permission')) || in_array('updateSetting',\Request::get('permission')))
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @if(in_array('viewRole',\Request::get('permission')))
                                            <li><a href="{{route('role')}}">Roles</a></li>
                                        @endif
                                        @if(in_array('viewUser',\Request::get('permission')))
                                            <li><a href="{{route('users')}}">Users</a></li>
                                        @endif
                                        @if(in_array('updateSetting',\Request::get('permission')))
                                            <li><a href="{{route('setting')}}">Settings</a></li>
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @endif

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    @if(in_array('updateSetting',\Request::get('permission')))
                        <a href="{{route('setting')}}" data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                    @endif
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                               id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img
                                    src="{{ !empty(Auth::user()->profile_picture)?asset(Auth::user()->profile_picture):asset('assets/admin/images/img.png')}}"
                                    alt="">{{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('admin/user/edit/'.Auth::user()->id)}}">
                                    {{auth()->user()->role_id===5?"Company Profile":"My Profile"}}</a>
                                @if(in_array('updateSetting',\Request::get('permission')))
                                    <a class="dropdown-item" href="{{route('setting')}}">Settings</a>
                                @endif
                                <a class="dropdown-item" href="{{route('logout')}}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i
                                        class="fa fa-sign-out pull-right"></i> Log Out</a>
                                <form id="logout-form" action="{{route('logout')}}" method="post"
                                      style="display: none">@csrf</form>
                            </div>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
    @yield('content')
    <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                {{$setting->title??""}} <a href="{{url('/')}}">Developed by mnb.</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
@yield('page_js')
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/alert.js') }}"></script>
@if(session()->has('success'))
    <script type="text/javascript">js_success("{{ session('success') }}")</script>
@endif
@if(session()->has('error'))
    <script type="text/javascript">js_error("{{ session('error') }}")</script>
@endif
</body>
</html>
