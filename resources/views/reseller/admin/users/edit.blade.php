@extends('reseller.admin.layout.webapp')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Profile</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><small>Reseller</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" method="POST" action="{{ route('reseller.admin.update') }}" enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('PUT')
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="f_name">First Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="f_name" class="form-control @error('f_name') is-invalid @enderror" name="f_name" value="{{ $record->f_name ?? "" }}" data-validate-length-range="6" data-validate-words="2" placeholder="Enter First Name" required="required" autocomplete="f_name" autofocus type="text">
                                        @error('f_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="l_name">Last Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="l_name" class="form-control @error('l_name') is-invalid @enderror" name="l_name" value="{{ $record->l_name ?? "" }}" data-validate-length-range="3" data-validate-words="1" placeholder="Enter Last Name" required="required" autocomplete="l_name" autofocus type="text">
                                        @error('l_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="company">Company <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="company" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ $record->company ?? "" }}" data-validate-length-range="2" data-validate-words="1" placeholder="Enter Company Name" required="required" autocomplete="company" autofocus type="text">
                                        @error('company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">{{ __('E-Mail Address') }} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $record->email ?? "" }}" required="required" autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group @error('password') bad @enderror">
                                    <label for="password" class="col-form-label col-md-3 label-align">{{ __('Password') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="password" type="password" name="password"  class="form-control @error('password') is-invalid @enderror" required="required" autocomplete="new-password">
                                    </div>
                                    @error('password')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="item form-group @error('website') bad @enderror">
                                    <label for="website" class="col-form-label col-md-3 label-align">{{ __('Website') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="website" type="text" name="website" value="{{$record->website}}"  class="form-control @error('website') is-invalid @enderror" required="required" autocomplete="website">
                                    </div>
                                    @error('website')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="item form-group @error('address') bad @enderror">
                                    <label for="address" class="col-form-label col-md-3 label-align">{{ __('Address') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="address" type="text" name="address" value="{{$record->address}}"  class="form-control @error('address') is-invalid @enderror" required="required" autocomplete="address">
                                    </div>
                                    @error('website')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="item form-group">
                                    <label for="address_line_two" class="col-form-label col-md-3 label-align">{{ __('Address 2') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="address_line_two" type="text" name="address_line_two" value="{{$record->address_line_two}}"  class="form-control"  autocomplete="address_line_two">
                                    </div>
                                </div>

                                <div class="item form-group @error('city') bad @enderror">
                                    <label for="city" class="col-form-label col-md-3 label-align">{{ __('City') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="city" type="text" name="city" value="{{$record->city}}"  class="form-control @error('city') is-invalid @enderror" required="required" autocomplete="city">
                                    </div>
                                    @error('city')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="item form-group @error('state') bad @enderror">
                                    <label for="state" class="col-form-label col-md-3 label-align">{{ __('State') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="state" type="text" name="state" value="{{$record->state}}"  class="form-control @error('state') is-invalid @enderror" required="required" autocomplete="state">
                                    </div>
                                    @error('state')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="item form-group @error('country') bad @enderror">
                                    <label for="country" class="col-form-label col-md-3 label-align">{{ __('Country') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="country" type="text" name="country" value="{{$record->country}}"  class="form-control @error('country') is-invalid @enderror" required="required" autocomplete="country">
                                    </div>
                                    @error('country')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="item form-group @error('post_code') bad @enderror">
                                    <label for="post_code" class="col-form-label col-md-3 label-align">{{ __('Postal Code') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="post_code" type="number" name="post_code" value="{{$record->postal_code}}"  class="form-control @error('post_code') is-invalid @enderror" required="required" autocomplete="post_code">
                                    </div>
                                    @error('post_code')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="item form-group @error('fed_tax_id') bad @enderror">
                                    <label for="fed_tax_id" class="col-form-label col-md-3 label-align">{{ __('Fed Tax Id') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="fed_tax_id" type="number" name="fed_tax_id" placeholder="Fed Tax ID Number Only last 4 digits" value="{{$record->fed_tax_id}}"  class="form-control @error('fed_tax_id') is-invalid @enderror" required="required" autocomplete="fed_tax_id">
                                    </div>
                                    @error('fed_tax_id')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="business_phone">{{__('Business Number')}} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="business_phone" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" name="business_phone" required="required" data-validate-length-range="10,15" value="{{ $record->business_phone ?? "" }}" class="form-control @error('business_phone') is-invalid @enderror">
                                        @error('business_phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group @error('business_status') bad @enderror">
                                    <label for="business_status" class="col-form-label col-md-3 label-align">{{ __('Business Status') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select autocomplete="business_status" class="input-text" data-validation="required" id="business_status" name="business_status" required>
                                            <option value="">Business Status *</option>
                                            <option @if($record->business_status === 'Corporation') selected @endif value="Corporation">Corporation</option>
                                            <option @if($record->business_status === 'Partnership') selected @endif value="Partnership">Partnership</option>
                                            <option @if($record->business_status === 'Individual') selected @endif value="Individual">Individual</option>
                                            <option @if($record->business_status === 'No Business Formed') selected @endif value="No Business Formed">No Business Formed</option>
                                            <option @if($record->business_status === 'Other (Please Specify)') selected @endif value="Other (Please Specify)">Other (Please Specify)</option>
                                        </select>
                                        @error('business_status')
                                        <p style="color: red; text-align: left">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="business_status_description">{{__('Business Status Description (Optional)')}}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="business_status_description" name="business_status_description" class="form-control @error('business_status_description') is-invalid @enderror" rows="2"></textarea>
                                        @error('business_status_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name_of_owner">{{__('Name of Owner')}}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input autocomplete="name_of_owner" value="{{$record->name_of_owner}}" class="input-text" id="name_of_owner" name="name_of_owner" placeholder="Name Of Owner / Principal" type="text">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="total_employees">{{__('Total Employees')}}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{$record->total_employees}}" autocomplete="total_employees" class="input-text" id="total_employees" name="total_employees" placeholder="Number Of Employees" type="number">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="sales_employees">{{__('Sales Employees')}}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input autocomplete="sales_employees" value="{{$record->sales_employees}}" class="input-text" id="sales_employees" name="sales_employees" placeholder="Number Of Sales Employees" type="number">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="approx_turnover_description">{{__('Approx Turnover Description')}}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea autocomplete="approx_turnover_description" class="form-control" id="approx_turnover_description" name="approx_turnover_description" placeholder="Please Specify *" rows="2">{{ $record->approx_turnover_description }}</textarea>
                                    </div>
                                </div>

                                <div class="item form-group @error('beyondant_promotion') bad @enderror">
                                    <label for="beyondant_promotion" class="col-form-label col-md-3 label-align">{{ __('Beyondant Promotion') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="beyondant_promotion" type="date" name="beyondant_promotion" value="{{$record->beyondant_promotion}}"  class="form-control @error('beyondant_promotion') is-invalid @enderror" required="required" autocomplete="beyondant_promotion">
                                    </div>
                                    @error('beyondant_promotion')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="item form-group @error('preferred_territory') bad @enderror">
                                    <label for="preferred_territory" class="col-form-label col-md-3 label-align">{{ __('Preferred Territory') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="preferred_territory" type="text" name="preferred_territory" value="{{$record->preferred_territory}}"  class="form-control @error('preferred_territory') is-invalid @enderror" required="required" autocomplete="country">
                                    </div>
                                    @error('preferred_territory')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="about_beyondant">{{__('About Beyondant')}}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="about_beyondant" required name="about_beyondant" class="form-control @error('about_beyondant') is-invalid @enderror" rows="2">{{$record->about_beyondant}}</textarea>
                                        @error('about_beyondant')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="short_paragraph">{{__('Short Paragraph')}}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="short_paragraph" required name="short_paragraph" class="form-control @error('short_paragraph') is-invalid @enderror" rows="2">{{$record->short_paragraph}}</textarea>
                                        @error('short_paragraph')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="profile_picture">Profile Picture <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->profile_picture)?$record->profile_picture:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="profile_picture" name="profile_picture" accept=".jpg,.png">
                                                    <input type="text" id="profile_picture" name="profile_picture" value="" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')
    <script src="{{asset('assets/admin/validator/validator.js')}}"></script>
    <script src="{{asset('assets/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{asset('assets/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{asset('assets/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
    <script>
        $(document).ready(() => {
            $('[data-mask]').inputmask()
        })
    </script>
@endsection
