@extends('layouts.app')
@section('content')
    <!-- Login page -->
    <div class="login_wrapper">
        <div class="container">
            <div class="col-md-12 pad-0">
                <div class="row login-box-12">
                    <div class="col-lg-4 col-md-12 col-sm-12 px-0">
                        <div class="login_right">
                            <a href="{{url('/')}}" class="logo_text">
                                <img alt="" class="img-fluid" src="{{asset('assets/front/images/')}}/logo2.png">
                            </a>
                            <p>At no cost to you utilize our platform (YES IT’S FREE) for an effective timely management of a global business presence or growth of your social media following. Make your mark in today's digitized world with minimum efforts on your part.</p>

                            <ul class="social-list clearfix">
                                <li><a href="javascript:void(0);" title="Instagram" class="link"> <img src="{{asset('assets/front/images/')}}/instagram-icon-3d.png"></a></li>
                                <li><a href="javascript:void(0);" title="Facebook" class="link"> <img src="{{asset('assets/front/images/')}}/facebook-icon-3d.png"></a></li>
                                <li><a href="javascript:void(0);" title="Tiktok" class="link"> <img src="{{asset('assets/front/images/')}}/tiktok-icon-3d.png"></a></li>
                                <li><a href="javascript:void(0);" title="Linkedin" class="link"> <img src="{{asset('assets/front/images/')}}/linkedin-icon-3d.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="login-inner-form">
                            <div class="details">

                                <h3>Create Your <span>Free {{$type}} Account</span></h3>
                                <form action="{{ route('profile-register') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="acc_type" value="{{strtolower($type)}}"/>
                                    <div class="row">
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="First Name *" data-validation="required name" value="{{ old('first_name') }}" required autocomplete="name">
                                                @error('first_name')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="name" class="input-text @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Last Name *" data-validation="required name" value="{{ old('last_name') }}" required autocomplete="last_name">
                                                @error('last_name')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="job_title" name="job_title" placeholder="Title" value="{{ old('job_title') }}" autocomplete="job_title">
                                                <!--@error('job_title')-->
                                                <!--<span class="text-danger" role="alert">-->
                                                <!--        <strong>{{ $message }}</strong>-->
                                                <!--    </span>-->
                                                <!--@enderror-->
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="password" class="input-text @error('password') is-invalid @enderror" id="password" name="password" data-validate-length="6,8" placeholder="Password *" required="required" autocomplete="new-password">
                                                @error('password')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="password" class="input-text @error('password-confirm') is-invalid @enderror" id="password-confirm" name="password_confirmation" data-validate-linked="password" placeholder="Password Confirm *" required="required" autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('company_name') is-invalid @enderror" id="company_name" name="company_name" data-validation="required" placeholder="Company Name *" value="{{ old('company_name') }}" required autocomplete="company_name">
                                                @error('company_name')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('company_description') is-invalid @enderror" id="company_description" name="company_description" data-validation="required" placeholder="Company Description" value="{{ old('company_description') }}" required autocomplete="company_description">
                                                @error('company_description')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <div class="checkBox_p helpC">
                                                    <i class="fas fa-question helpc" data-toggle="tooltip" data-placement="top" title="Up To 255 Characters"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="contact_number" name="contact_number" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" placeholder="Phone Number *" value="{{ old('contact_number') }}" autocomplete="contact_number">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" type="checkbox" value="1" id="office_check" name="office_check">
                                                    <label class="form-check-label" for="office_check" data-toggle="tooltip" data-placement="top" title="Check here for Office Extension"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('mobile_number') is-invalid @enderror" id="mobile_number" name="mobile_number" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" data-validation="required" placeholder="Mobile Number *" value="{{ old('mobile_number') }}" required autocomplete="mobile_number">
                                                @error('mobile_number')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <select name="mobile_check" id="mobile_check" class="input-text" data-validation="required" required>
                                                    <option value="">Select To Display</option>
                                                    <option value="Mobile">Mobile</option>
                                                    <option value="Phone">Phone</option>
                                                    <option value="Office Number">Office Number</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="email" class="input-text @error('email') is-invalid @enderror" id="email" data-validation="required email" placeholder="Email Address *" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                @error('email')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text " id="address" name="address" placeholder="Address *" value="{{ old('address') }}" autocomplete="address">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="city" name="city" placeholder="City *" value="{{ old('city') }}" autocomplete="city">

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text " id="state" name="state" placeholder="State *" value="{{ old('state') }}" autocomplete="state">

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="province" name="province" placeholder="Province" autocomplete="province">

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text " id="zipcode" name="zipcode" placeholder="Zip Code *" value="{{ old('zipcode') }}" autocomplete="zipcode">

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="website" name="website" placeholder="Website (url)">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" type="checkbox" value="1" id="website_check" name="website_check">
                                                    <label class="form-check-label" for="website_check" data-toggle="tooltip" data-placement="top" title="Make this my primary contact page"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <select name="website_address" id="website_address" class="input-text" data-validation="required">
                                                    <option value="">Select To Display</option>
                                                    <option value="Address">Address</option>
                                                    <option value="Website">Website</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="linkedin" name="linkedin" placeholder="Paste your Linkedin (url)">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" type="checkbox" value="1" id="linkedin_check" name="linkedin_check">
                                                    <label class="form-check-label" for="linkedin_check" data-toggle="tooltip" data-placement="top" title="Make this my primary contact page"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="tiktok" name="tiktok" placeholder="Paste your Tiktok (url)">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" type="checkbox" value="1" id="tiktok_check" name="tiktok_check">
                                                    <label class="form-check-label" for="tiktok_check" data-toggle="tooltip" data-placement="top" title="Make this my primary contact page"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="instagram" name="instagram" placeholder="Paste your Instagram (url)">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" type="checkbox" value="1" id="instagram_check" name="instagram_check">
                                                    <label class="form-check-label" for="instagram_check" data-toggle="tooltip" data-placement="top" title="Make this my primary contact page"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="facebook" name="facebook" placeholder="Paste your Facebook (url)">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" type="checkbox" value="1" id="facebook_check" name="facebook_check">
                                                    <label class="form-check-label" for="facebook_check" data-toggle="tooltip" data-placement="top" title="Make this my primary contact page"></label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-12 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="reseller_code" name="reseller_code" placeholder="Do You Have A Reseller Code? Enter Here" autocomplete="reseller_code">

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <div class="circle">
                                                    <img class="profile-picFour" src="{{ asset('assets/front/images/choosecoverphoto-n.jpg') }}">
                                                </div>
                                                <div class="p-image">
                                                    <i class="fa fa-image upload-buttonFour"></i>
                                                    <input class="file-uploadFour" id="cover_image" name="cover_image" type="file" accept="image/*"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <div class="circle">
                                                    <img class="profile-picFive" src="{{ asset('assets/front/images/chooseprofileimage-n.jpg') }}">
                                                </div>
                                                <div class="p-image">
                                                    <i class="fa fa-image upload-buttonFive"></i>
                                                    <input class="file-uploadFive" id="profile_picture" name="profile_picture" type="file" accept="image/*"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-lr">
                                            <div class="checkbox clearfix m-t-20">
                                                <div class="form-check checkbox-input">
                                                    <input class="form-check-input" type="checkbox" value="1" id="termServices" name="termServices" data-validation="required" required>
                                                    <label class="form-check-label" for="termServices">
                                                        I agree to the terms of service
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-lr">
                                            <div class="form-group">
                                                <button type="submit" class="btn-md btn-theme btn-block">Register Now</button>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                                <p class="m-t-20">Already a member?<a href="{{route('login')}}"> Login here</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /. Login page -->
@endsection
@section('pageJs')
    <script src="{{asset('assets/front/js/jquery.form-validator.min.js')}}"></script>
    <!-- InputMask -->
    <script src="{{asset('assets/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{asset('assets/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{asset('assets/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
    <script>
        $(document).ready(() => {
            $.validate({
                lang: 'en'
            });
            //Money Euro
            $('[data-mask]').inputmask()
        })
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            $(document).on('click', '#office_check', function () {
                if ($('input#office_check').is(':checked')) {
                    $('input#contact_number').inputmask({mask: '(999) 999-9999 999'});
                } else {
                    $('input#contact_number').inputmask({mask: '(999) 999-9999'});
                }
            });
        });

        $(document).ready(function () {
            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.profile-picFour').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-uploadFour").on('change', function () {
                readURL(this);
            });

            $(".upload-buttonFour").on('click', function () {
                $(".file-uploadFour").click();
            });
        });
        $(document).ready(function () {
            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.profile-picFive').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-uploadFive").on('change', function () {
                readURL(this);
            });

            $(".upload-buttonFive").on('click', function () {
                $(".file-uploadFive").click();
            });
        });


    </script>
@stop
