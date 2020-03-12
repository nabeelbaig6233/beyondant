@extends('layouts.app')
@section('content')
    <!-- Login page -->
    <div class="login_wrapper">
        <div class="container">
            <div class="col-md-12 pad-0">
                <div class="row login-box-12">
                    <div class="col-lg-4 col-md-12 col-sm-12 px-0">
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
                    <div class="col-lg-8 col-sm-12">
                        <div class="login-inner-form">
                            <div class="details">
                                <h3>Update <span>Your Account</span></h3>
                                <form action="{{ route('update-profile',$record->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="row">
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="name" class="input-text @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name *" data-validation="required name" value="{{ $record->name ?? '' }}" required autocomplete="name">
                                                @error('name')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('job_title') is-invalid @enderror" id="job_title" name="job_title" data-validation="required" placeholder="Title *" value="{{ $record->job_title ?? '' }}" required autocomplete="job_title">
                                                @error('job_title')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
                                                <input type="password" class="input-text @error('password-confirm') is-invalid @enderror" id="password-confirm" name="password_confirmation" data-validate-linked="password" placeholder="Password Confirm *"  required="required" autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('company_name') is-invalid @enderror" id="company_name" name="company_name" data-validation="required" placeholder="Company Name *" value="{{ $record->company_name ?? '' }}" required autocomplete="company_name">
                                                @error('company_name')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('company_description') is-invalid @enderror" id="company_description" name="company_description" data-validation="required" placeholder="Company Description *" value="{{ $record->company_description ?? '' }}" required autocomplete="company_description">
                                                @error('company_description')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="number" class="input-text" id="contact_number" name="contact_number" placeholder="Phone Number *" value="{{ $record->contact_number ?? '' }}" autocomplete="contact_number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="number" class="input-text @error('mobile_number') is-invalid @enderror" id="mobile_number" name="mobile_number" data-validation="required number" placeholder="Mobile Number *" value="{{ $record->mobile_number ?? '' }}" required autocomplete="mobile_number">
                                                @error('mobile_number')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <select name="mobile_check" id="mobile_check" class="input-text" data-validation="required">
                                                    <option value="">Select which one you want to show</option>
                                                    <option value="Mobile" {{ (($record->mobile_check == 'Mobile') ? 'selected' : '' ) }}>Mobile</option>
                                                    <option value="Phone" {{ (($record->mobile_check == 'Phone') ? 'selected' : '' ) }}>Phone</option>
                                                    <option value="Fax" {{ (($record->mobile_check == 'Fax') ? 'selected' : '' ) }}>Fax</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="number" class="input-text" id="fax_number" name="fax_number" placeholder="Fax Number *" value="{{ $record->fax_number ?? '' }}" autocomplete="fax_number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="email" class="input-text @error('email') is-invalid @enderror" id="email" data-validation="required email" placeholder="Email Address *" name="email" value="{{ $record->email ?? '' }}" required autocomplete="email">
                                                @error('email')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('address') is-invalid @enderror" id="address" name="address" data-validation="required" placeholder="Address *" value="{{ $record->address ?? '' }}" required autocomplete="address">
                                                @error('address')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="website" name="website" placeholder="Website (url)" value="{{ $record->website ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <select name="website_address" id="website_address" class="input-text" data-validation="required">
                                                    <option value="">Select which one you want to show</option>
                                                    <option value="Address" {{ (($record->website_address == 'Address') ? 'selected' : '' ) }}>Address</option>
                                                    <option value="Website" {{ (($record->website_address == 'Website') ? 'selected' : '' ) }}>Website</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="linkedin" name="linkedin" placeholder="Linkedin (url)" value="{{ $record->linkedin ?? '' }}">
                                                <div class="form-check sm checkbox-input">
                                                    <input class="form-check-input" {{ (((int)$record->linkedin_check == 1) ? 'checked' : '' ) }} type="checkbox" value="1" id="linkedin_check" name="linkedin_check">
                                                    <label class="form-check-label" for="linkedin_check">
                                                        Enter your Linkedin (url)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="instagram" name="instagram" placeholder="Instagram (url)" value="{{ $record->instagram ?? '' }}" data-validation="url">
                                                <div class="form-check sm checkbox-input">
                                                    <input class="form-check-input" {{ (((int)$record->instagram_check == 1) ? 'checked' : '' ) }} type="checkbox" value="1" id="instagram_check" name="instagram_check">
                                                    <label class="form-check-label" for="instagram_check">
                                                        Enter your Instagram (url)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="facebook" name="facebook" placeholder="Facebook (url)" value="{{ $record->facebook ?? '' }}">
                                                <div class="form-check sm checkbox-input">
                                                    <input class="form-check-input" {{ (((int)$record->facebook_check == 1) ? 'checked' : '' ) }} type="checkbox" value="1" id="facebook_check" name="facebook_check">
                                                    <label class="form-check-label" for="facebook_check">
                                                        Enter your Facebook (url)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="cover_image" name="cover_image">
                                                    <input type="hidden" class="custom-file-input" value="{{ $record->cover_image ?? '' }}" id="cover_image" name="cover_image">
                                                    <label class="custom-file-label" for="cover_image">Choose Cover Image</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="profile_picture" name="profile_picture">                                                    <input type="hidden" class="custom-file-input" value="{{ $record->cover_image ?? '' }}" id="cover_image" name="cover_image">
                                                    <input type="hidden" class="custom-file-input" value="{{ $record->profile_picture ?? '' }}" id="profile_picture" name="profile_picture">
                                                    <label class="custom-file-label" for="profile_picture">Choose Profile Image</label>
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
                                                <button type="submit" class="btn-md btn-theme btn-block">Update Now</button>
                                            </div>
                                        </div>
                                    </div>


                                </form>
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
        <script>
            $(document).ready(() => {
                $.validate({
                    lang: 'en'
                })
            })
        </script>
    @stop
