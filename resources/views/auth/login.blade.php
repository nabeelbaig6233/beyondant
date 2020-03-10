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
                                <li><a href="javascript:void(0);" title="Twitter" class="link"> <img src="{{asset('assets/front/images/')}}/twitter-icon-3d.png"></a></li>
                                <li><a href="javascript:void(0);" title="Linkedin" class="link"> <img src="{{asset('assets/front/images/')}}/linkedin-icon-3d.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="login-inner-form">
                            <div class="details">
                                <h3>Login to <span>Your Account</span></h3>
                                <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="input-text @error('is-invalid') @enderror" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="input-text @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Password">
                                    </div>
                                    <div class="checkbox clearfix">
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="forgot-password.blade.php">Forgot Password</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn-md btn-theme btn-block">Login Now</button>
                                    </div>
                                </form>
                                <p class="m-t-20">Don't have an account?<a href="{{route('register')}}"> Register here</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /. Login page -->


@endsection
