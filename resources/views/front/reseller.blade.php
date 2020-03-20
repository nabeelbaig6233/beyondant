@extends('layouts.app')

@section('content')
    <!-- Login page -->
    <div class="login_wrapper">
        <div class="container">
            <div class="col-md-12 pad-0">
                <div class="row login-box-12">
                    <div class="col-lg-4 col-md-12 col-sm-12 px-0">
                        <div class="login_right">
                            <a href="{{ url('/') }}" class="logo_text">
                                <img alt="" class="img-fluid" src="{{ asset('assets/front/images/logo2.png') }}">
                            </a>
                            <p>Calling qualified entrepreneurs! Join a growing network of Authorized Resellers and build a solid stream of income. Allow 7 business days for your application to be reviewed. We will be in touch soon and look forward to working with you!</p>

                            <ul class="social-list clearfix">
                                <li>
                                    <a href="javascript:void(0);" title="Instagram" class="link">
                                        <img src="{{ asset('assets/front/images/instagram-icon-3d.png') }}" alt="Instagram">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" title="Facebook" class="link">
                                        <img src="{{ asset('assets/front/images/facebook-icon-3d.png') }}" alt="Facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" title="Tiktok" class="link">
                                        <img src="{{ asset('assets/front/images/tiktok-icon-3d.png') }}" alt="TikTok">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" title="LinkedIn" class="link">
                                        <img src="{{ asset('assets/front/images/linkedin-icon-3d.png') }}" alt="LinkedIn">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="login-inner-form">
                            <div class="details">
                                <h3>
                                    <span>Authorized Reseller </span>Application
                                </h3>
                                <form action="{{ route('reseller.submit') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('f_name') }}" autocomplete="f_name" class="input-text" data-validation="required" id="f_name" name="f_name" placeholder="First Name *" required type="text">
                                                @error('f_name')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('l_name') }}" autocomplete="l_name" class="input-text" data-validation="required" id="l_name" name="l_name" placeholder="Last Name *" required type="text">
                                                @error('l_name')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('company') }}" autocomplete="company" class="input-text" data-validation="required" id="company" name="company" placeholder="Company *" required type="text">
                                                @error('company')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('email') }}" autocomplete="email" class="input-text" data-validation="required" id="email" name="email" placeholder="E - Mail *" required type="email">
                                                @error('email')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('website') }}" autocomplete="website" class="input-text" id="website" name="website" placeholder="Website" type="text">
                                                @error('website')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('address') }}" autocomplete="address" class="input-text" data-validation="required" id="address" name="address" placeholder="Address *" required type="text">
                                                @error('address')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('address_line_two') }}" autocomplete="address_line_two" class="input-text" id="address_line_two" name="address_line_two" placeholder="Address Line 2" type="text">
                                                @error('address_line_two')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('city') }}" autocomplete="city" class="input-text" data-validation="required" id="city" name="city" placeholder="City *" required="required" type="text">
                                                @error('city')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('state') }}" autocomplete="state" class="input-text" data-validation="required" id="state" name="state" placeholder="State *" required type="text">
                                                @error('state')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('country') }}" autocomplete="country" class="input-text" data-validation="required" id="country" name="country" placeholder="Country *" required type="text">
                                                @error('country')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('postal_code') }}" autocomplete="postal_code" class="input-text" data-validation="required" id="postal_code" name="postal_code" placeholder="Postal Code / Zip Code *" required type="number">
                                                @error('postal_code')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('fed_tax_id') }}" autocomplete="fed_tax_id" class="input-text" id="fed_tax_id" name="fed_tax_id" placeholder="Fed Tax ID Number" type="text">
                                                @error('fed_tax_id')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('business_phone') }}" autocomplete="business_phone" class="input-text" id="business_phone" name="business_phone" placeholder="Business Phone" type="number">
                                                @error('business_phone')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <select autocomplete="business_status" class="input-text" data-validation="required" id="business_status" name="business_status" required>
                                                    <option @if(old('business_status') === null) selected @endif disabled>Business Status *</option>
                                                    <option @if(old('business_status') === 'Corporation') selected @endif value="Corporation">Corporation</option>
                                                    <option @if(old('business_status') === 'Partnership') selected @endif value="Partnership">Partnership</option>
                                                    <option @if(old('business_status') === 'Individual') selected @endif value="Individual">Individual</option>
                                                    <option @if(old('business_status') === 'Other (Please Specify)') selected @endif value="Other (Please Specify)">Other (Please Specify)</option>
                                                </select>
                                                @error('business_status')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-lr" id="business_status_description_box" @if(old('business_status') !== 'Other (Please Specify)') style="display: none" @endif>
                                            <div class="form-group">
                                                <textarea autocomplete="business_status_description" class="input-text" id="business_status_description" name="business_status_description" placeholder="Business Status Description" rows="10" style="height: 30vh">{{ old('business_status_description') }}</textarea>
                                                @error('business_status_description')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('date_organized') }}" autocomplete="date_organized" class="input-text" data-validation="required" id="date_organized" name="date_organized" placeholder="Date Organized *" required type="text" onfocus="(this.type = 'date')" onblur="(this.type='text')">
                                                @error('date_organized')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('name_of_owner') }}" autocomplete="name_of_owner" class="input-text" data-validation="required" id="name_of_owner" name="name_of_owner" placeholder="Name Of Owner / Principal *" required type="text">
                                                @error('name_of_owner')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('num_of_locations') }}" autocomplete="num_of_locations" class="input-text" id="num_of_locations" name="num_of_locations" placeholder="Number Of Locations" type="number">
                                                @error('num_of_locations')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('total_employees') }}" autocomplete="total_employees" class="input-text" data-validation="required" id="total_employees" name="total_employees" placeholder="Number Of Employees *" required type="number">
                                                @error('total_employees')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('sales_employees') }}" autocomplete="sales_employees" class="input-text" id="sales_employees" name="sales_employees" placeholder="Number Of Sales Employees" type="number">
                                                @error('sales_employees')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('brands') }}" autocomplete="brands" class="input-text" data-validation="required" id="brands" name="brands" placeholder="What Brands Do You Deal With? *" required type="text">
                                                @error('brands')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-lr">
                                            <div class="form-group">
                                                <select autocomplete="approx_turnover" class="input-text" id="approx_turnover" name="approx_turnover">
                                                    <option @if(old('approx_turnover') === null) selected @endif disabled>Approximate Annual Business Turnover</option>
                                                    <option @if(old('approx_turnover') === '$0 - $1 Million') selected @endif value="$0 - $1 Million">$0 - $1 Million</option>
                                                    <option @if(old('approx_turnover') === '$1 - $10 Million') selected @endif value="$1 - $10 Million">$1 - $10 Million</option>
                                                    <option @if(old('approx_turnover') === '$10+ Million') selected @endif value="$10+ Million">$10+ Million</option>
                                                    <option @if(old('approx_turnover') === 'Other (Please Specify)') selected @endif value="Other (Please Specify)">Other (Please Specify)</option>
                                                </select>
                                                @error('approx_turnover')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-lr" id="approx_turnover_box" @if(old('approx_turnover') !== 'Other (Please Specify)') style="display: none" @endif>
                                            <div class="form-group">
                                                <textarea autocomplete="approx_turnover_description" class="input-text" id="approx_turnover_description" name="approx_turnover_description" placeholder="Please Specify *" style="height: 30vh">{{ old('approx_turnover_description') }}</textarea>
                                                @error('approx_turnover_description'))
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('beyondant_promotion') }}" autocomplete="beyondant_promotion" class="input-text" data-validation="required" id="beyondant_promotion" name="beyondant_promotion" placeholder="When Would You Start Promoting Beyondant? *" required type="text" onfocus="(this.type = 'date')" onblur="(this.type='text')">
                                                @error('beyondant_promotion')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-lr">
                                            <div class="form-group">
                                                <input value="{{ old('preferred_territory') }}" autocomplete="preferred_territory" class="input-text" data-validation="required" id="preferred_territory" name="preferred_territory" placeholder="Preferred Territory (Area Where You Can Effectively Market) *" required type="text">
                                                @error('preferred_territory')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-lr">
                                            <div class="form-group">
                                                <textarea autocomplete="about_beyondant" class="input-text" data-validation="required" id="about_beyondant" name="about_beyondant" placeholder="How Did You Hear About Beyondant *" required style="height: 30vh">{{ old('about_beyondant') }}</textarea>
                                                @error('about_beyondant')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-lr">
                                            <div class="form-group">
                                                <textarea autocomplete="short_paragraph" class="input-text" data-validation="required" id="short_paragraph" name="short_paragraph" placeholder="When Ideally Would You Like To Start Promoting Beyondant? *" required style="height: 30vh">{{ old('short_paragraph') }}</textarea>
                                                @error('short_paragraph')
                                                    <p style="color: red; text-align: left">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-lr">
                                            <div class="form-group">
                                                <button type="submit" class="btn-md btn-theme btn-block">Submit Application</button>
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
        $(() => $.validate({lang: 'en'}));
        document.getElementById('business_status').addEventListener('change', event => {
            if (event.target.value === 'Other (Please Specify)') {
                document.getElementById('business_status_description_box').style.display = '';
            } else {
                document.getElementById('business_status_description_box').style.display = 'none';
            }
        });
        document.getElementById('approx_turnover').addEventListener('change', event => {
            if (event.target.value === 'Other (Please Specify)') {
                document.getElementById('approx_turnover_box').style.display = '';
            } else {
                document.getElementById('approx_turnover_box').style.display = 'none';
            }
        });
    </script>
@endsection
