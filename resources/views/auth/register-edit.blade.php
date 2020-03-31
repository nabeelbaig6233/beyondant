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
                                <h3>Update <span>Your Account</span></h3>
                                <form action="{{ route('update-profile',$record->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="First Name *" data-validation="required name" value="{{ $record->first_name ?? '' }}" required autocomplete="name">
                                                @error('first_name')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="name" class="input-text @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Last Name *" data-validation="required name" value="{{ $record->last_name ?? '' }}" required autocomplete="last_name">
                                                @error('last_name')
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
                                                <input type="text" class="input-text @error('company_description') is-invalid @enderror" id="company_description" name="company_description" data-validation="required" placeholder="Company Description" value="{{ $record->company_description ?? '' }}" required autocomplete="company_description">
                                                @error('company_description')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <div class="checkBox_p helpC">
                                                    <i class="fas fa-question helpc" data-toggle="tooltip" data-placement="top" title="Up To 255 Characters" ></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="contact_number" name="contact_number" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999 @php $ext = explode(" ",$record->contact_number); echo !empty($ext[2])? '999' : '' @endphp&quot;" data-mask="" placeholder="Phone Number *" value="{{ $record->contact_number ?? '' }}" autocomplete="contact_number">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" type="checkbox" value="1" id="office_check" name="office_check">
                                                    <label class="form-check-label" for="office_check" data-toggle="tooltip" data-placement="top" title="Check here for Office Extension"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('mobile_number') is-invalid @enderror" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" id="mobile_number" name="mobile_number" data-validation="required" placeholder="Mobile Number *" value="{{ $record->mobile_number ?? '' }}" required autocomplete="mobile_number">
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
                                                    <option value="">Select To Display</option>
                                                    <option value="Mobile" {{ (($record->mobile_check == 'Mobile') ? 'selected' : '' ) }}>Mobile</option>
                                                    <option value="Phone" {{ (($record->mobile_check == 'Phone') ? 'selected' : '' ) }}>Phone</option>
                                                    <option value="Office Number" {{ (($record->mobile_check == 'Office Number') ? 'selected' : '' ) }}>Office Number</option>
                                                </select>
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
                                                <input type="text" class="input-text @error('city') is-invalid @enderror" id="city" name="city" data-validation="required" placeholder="City *" value="{{ $record->city ?? '' }}" required autocomplete="city">
                                                @error('city')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('state') is-invalid @enderror" id="state" name="state" data-validation="required" placeholder="State *" value="{{ $record->state ?? '' }}" required autocomplete="state">
                                                @error('state')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('province') is-invalid @enderror" id="province" value="{{ $record->province ?? '' }}" name="province" placeholder="Province" autocomplete="province">
                                                @error('province')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text @error('zipcode') is-invalid @enderror" id="zipcode" name="zipcode" data-validation="required" placeholder="Zip Code *" value="{{ $record->zipcode ?? '' }}" required autocomplete="zipcode">
                                                @error('zipcode')
                                                <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <select name="website_address" id="website_address" class="input-text" data-validation="required">
                                                    <option value="">Select To Display</option>
                                                    <option value="Address" {{ (($record->website_address == 'Address') ? 'selected' : '' ) }}>Address</option>
                                                    <option value="Website" {{ (($record->website_address == 'Website') ? 'selected' : '' ) }}>Website</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="website" name="website" placeholder="Website (url)" value="{{ $record->website ?? '' }}">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" type="checkbox" value="1" id="website_check" name="website_check" {{ (((int)$record->website_check == 1) ? 'checked' : '' ) }}>
                                                    <label class="form-check-label" for="website_check" data-toggle="tooltip" data-placement="top" title="Make this my primary contact page"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="linkedin" name="linkedin" placeholder="Linkedin (url)" value="{{ $record->linkedin ?? '' }}">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" {{ (((int)$record->linkedin_check == 1) ? 'checked' : '' ) }} type="checkbox" value="1" id="linkedin_check" name="linkedin_check">
                                                    <label class="form-check-label" for="linkedin_check" data-toggle="tooltip" data-placement="top" title="Make this my primary contact page"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="facebook" name="facebook" placeholder="Facebook (url)" value="{{ $record->facebook ?? '' }}">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" {{ (((int)$record->facebook_check == 1) ? 'checked' : '' ) }} type="checkbox" value="1" id="facebook_check" name="facebook_check">
                                                    <label class="form-check-label" for="facebook_check" data-toggle="tooltip" data-placement="top" title="Make this my primary contact page"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="instagram" name="instagram" placeholder="Instagram (url)" value="{{ $record->instagram ?? '' }}">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" {{ (((int)$record->instagram_check == 1) ? 'checked' : '' ) }} type="checkbox" value="1" id="instagram_check" name="instagram_check">
                                                    <label class="form-check-label" for="instagram_check" data-toggle="tooltip" data-placement="top" title="Make this my primary contact page"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="tiktok" name="tiktok" placeholder="Tik Tok (url)" value="{{ $record->tiktok ?? '' }}">
                                                <div class="form-check sm checkbox-input checkBox_p">
                                                    <input class="form-check-input" {{ (((int)$record->tiktok_check == 1) ? 'checked' : '' ) }} type="checkbox" value="1" id="tiktok_check" name="tiktok_check">
                                                    <label class="form-check-label" for="tiktok_check" data-toggle="tooltip" data-placement="top" title="Make this my primary contact page"></label>
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
                                <a href="{{ route('changepassword',$record->id) }}"> Change Password</a>
                                <p class="m-t-20"><a href="{{ route('pro',auth()->user()->id) }}"> Back</a></p>
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
          $(document).on('click','#office_check',function() {
              if($('input#office_check').is(':checked')) {
                  $('input#contact_number').inputmask({mask: '(999) 999-9999 999'});
              }
          });
        });
    </script>
@stop
