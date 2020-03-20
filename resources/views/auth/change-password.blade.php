@extends('layouts.app')
@section('content')

    <!-- Login page -->
    <div class="login_wrapper">
        <div class="container">
            <div class="col-md-12 pad-0">
                <div class="row login-box-12">
                    <div class="col-lg-6 col-md-12 col-sm-12 px-0">
                        <div class="login_right">
                            <a href="index.html" class="logo_text">
                                <img alt="" class="img-fluid" src="{{asset('assets/front/images/')}}/logo2.png">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem Ipsum</p>
                            <a href="#" class="btn-outline">Read More</a>
                            <ul class="social-list clearfix">
                                <li><a href="javascript:void(0);" title="Instagram" class="link"> <img src="{{asset('assets/front/images/')}}/instagram-icon-3d.png"></a></li>
                                <li><a href="javascript:void(0);" title="Facebook" class="link"> <img src="{{asset('assets/front/images/')}}/facebook-icon-3d.png"></a></li>
                                <li><a href="javascript:void(0);" title="Tiktok" class="link"> <img src="{{asset('assets/front/images/')}}/tiktok-icon-3d.png"></a></li>
                                <li><a href="javascript:void(0);" title="Linkedin" class="link"> <img src="{{asset('assets/front/images/')}}/linkedin-icon-3d.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="login-inner-form">
                            <div class="details">
                                <h3><span>Change Password</span></h3>
                                <form action="{{route('change-password',request()->segment(2))}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <input type="password" id="password" name="password" class="input-text" required autocomplete="off" placeholder="New Password">
                                        @error('password')
                                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="input-text"  required autocomplete="off" placeholder="Confirm New Password">
                                        @error('password_confirmation')
                                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn-md btn-theme btn-block">Change Password</button>
                                    </div>
                                </form>
                                <p class="m-t-20"><a href="{{ route('edit-profile',request()->segment(2)) }}"> Go Back</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /. Login page -->


@endsection