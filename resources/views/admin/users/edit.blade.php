@extends('admin.layout.webapp')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit {{ !empty($title)?$title:'' }}</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ !empty($title)?$title:'' }} <small>{{ __('Register') }}</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link" @if(auth()->user()->role_id===5) href="{{route('profile')}}" @endif><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
{{--                            @if (auth()->user()->role_id===5)--}}
{{--                                <a href="{{route('pro',auth()->user()->id)}}">Visit Profile</a>--}}
{{--                            @endif--}}
                            <form class="form-horizontal form-label-left" method="POST" action="{{ route('post.update',$record->id) }}" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                @if(auth()->user()->role_id!==1)
                                    <input type="hidden" name="role_id" value='{{auth()->user()->role_id}}' />
                                    @else
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="role_id">Select Role <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6">
                                            <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror" required="required">
                                                <option value="">Select Role</option>
                                                @if (!empty($role))
                                                    @foreach($role as $roles)
                                                        <option value="{{$roles->id}}" {{(!empty($record->role_id == $roles->id)?"selected":"")}}>{{$roles->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('role_id')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>

                                @endif

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $record->first_name." ".$record->last_name ?? "" }}" data-validate-length-range="6" data-validate-words="2" placeholder="both name(s) e.g Jon Doe" required="required" autocomplete="name" autofocus type="text">
                                        @error('name')
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
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Confirm Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" value="{{ $record->email ?? "" }}" class="form-control" autocomplete="email">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="contact_number">{{auth()->user()->role_id===5?__('Phone Number'):__('Contact Number')}} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="contact_number" name="contact_number" required="required" data-validate-length-range="10,15" value="{{ $record->contact_number ?? "" }}" class="form-control @error('contact_number') is-invalid @enderror">
                                        @error('contact_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                @if (auth()->user()->role_id!==1)

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="mobile_number">{{__('Mobile Or Office Number')}} <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" id="mobile_number" name="mobile_number" required="required" data-validate-length-range="10,19" value="{{ $record->mobile_number ?? "" }}" class="form-control @error('mobile_number') is-invalid @enderror">
                                            @error('mobile_number')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">{{__('Select To Display')}} <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 form-check-inline">

                                                <input type="radio" class="form-check-input" name="mobile_check" id="phone_number" value="Phone" checked @php echo $record->mobile_check=="Phone"?"checked":"" @endphp />
                                                <label for="phone_number" class="form-check-label pr-2">PHONE NUMBER</label>
                                                <input type="radio" class="form-check-input" name="mobile_check" id="mobile_number" value="Mobile"  @php echo $record->mobile_check=="Mobile"?"checked":"" @endphp />
                                                <label for="mobile_number" class="form-check-label pr-2">MOBILE NUMBER</label>
                                                <input type="radio" class="form-check-input" name="mobile_check" id="office_number" value="Office Number"  @php echo $record->mobile_check=="Office Number"?"checked":"" @endphp />
                                                <label for="office_number" class="form-check-label pr-2">OFFICE NUMBER</label>
                                        </div>
                                    </div>

                                    <div class="item form-group @error('company_name') bad @enderror">
                                        <label for="company_name" class="col-form-label col-md-3 label-align">{{ __('Company Name') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="company_name" type="text" name="company_name" value="{{$record->company_name}}"  class="form-control @error('company_name') is-invalid @enderror" required="required" autocomplete="company_name">
                                        </div>
                                        @error('company_name')
                                        <div class="alert">{{$message}}</div>
                                        @enderror
                                    </div>


                                    <div class="item form-group @error('company_description') bad @enderror">
                                        <label for="company_description" class="col-form-label col-md-3 label-align">{{ __('Company Description') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="company_description" type="text" name="company_description" value="{{$record->company_description}}"  class="form-control @error('company_description') is-invalid @enderror" required="required" autocomplete="company_description">
                                        </div>
                                        @error('company_description')
                                        <div class="alert">{{$message}}</div>
                                        @enderror
                                    </div>



                                    <div class="item form-group">
                                        <label for="address" class="col-form-label col-md-3 label-align">{{ __('Address') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="address" type="text" name="address" value="{{$record->address}}"  class="form-control autocomplete="address">
                                        </div>

                                    </div>



                                    <div class="item form-group">
                                        <label for="state" class="col-form-label col-md-3 label-align">{{ __('State') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="state" type="text" name="state" value="{{$record->state}}"  class="form-control"  autocomplete="state">
                                        </div>

                                    </div>


                                    <div class="item form-group">
                                        <label for="city" class="col-form-label col-md-3 label-align">{{ __('City') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="city" type="text" name="city" value="{{$record->city}}"  class="form-control"  autocomplete="city">
                                        </div>

                                    </div>

                                    <div class="item form-group">
                                        <label for="province" class="col-form-label col-md-3 label-align">{{ __('Province') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="province" type="text" name="province" value="{{$record->province}}"  class="form-control"  autocomplete="province">
                                        </div>

                                    </div>

                                    <div class="item form-group">
                                        <label for="zipcode" class="col-form-label col-md-3 label-align">{{ __('Zip Code') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="zipcode" type="text" name="zipcode" value="{{$record->zipcode}}"  class="form-control"  autocomplete="zipcode">
                                        </div>

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


                                    <div class="item form-group">
                                        <label for="linkedin" class="col-form-label col-md-3 label-align">{{ __('Linkedin') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="linkedin" type="text" name="linkedin" value="{{$record->linkedin}}"  class="form-control" autocomplete="linkedin">
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label for="facebook" class="col-form-label col-md-3 label-align">{{ __('Facebook') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="facebook" type="text" name="facebook" value="{{$record->facebook}}"  class="form-control" autocomplete="facebook">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="instagram" class="col-form-label col-md-3 label-align">{{ __('Instagram') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="instagram" type="text" name="instagram" value="{{$record->instagram}}"  class="form-control" autocomplete="instagram">
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label for="tiktok" class="col-form-label col-md-3 label-align">{{ __('Tiktok') }}</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="tiktok" type="text" name="tiktok" value="{{$record->tiktok}}"  class="form-control" autocomplete="tiktok">
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 label-align">Select What Should Be Your Default Profile (Optional)?</label>
                                        <div class="col-md-6 col-sm-6 form-check-inline">
                                            <input id="web" type="radio" name="check" value="website"  class="form-check-input" {{$record->website_check==1?"checked":""}} >
                                            <label for="web" class="form-check-label pr-2">Website</label>
                                            <input id="linkdin" type="radio" name="check" value="linkdin"  class="form-check-input" {{$record->linkdin_check==1?"checked":"" }}>
                                            <label for="linkdin" class="form-check-label pr-2">Linkedin</label>
                                            <input id="facebook" type="radio" name="check" value="facebook"  class="form-check-input" {{$record->facebook_check==1?"checked":""}}>
                                            <label for="facebook" class="form-check-label pr-2">Facebook</label>
                                            <input id="instagram" type="radio" name="check" value="instagram"  class="form-check-input " {{$record->instagram_check==1?"checked":"" }}>
                                            <label for="instagram" class="form-check-label pr-2">Instagram</label>
                                            <input id="tiktok" type="radio" name="check" value="tiktok"  class="form-check-input " {{$record->tiktok_check==1?"checked":""}}>
                                            <label for="tiktok" class="form-check-label pr-2">Tiktok</label>
                                            <input id="default" type="radio" name="check" value=""  class="form-check-input " {{$record->website_check!=1&&$record->linkdin_check!=1&&$record->facebook_check!=1&&$record->instagram_check!=1&&$record->tiktok_check!=1?"checked":""}}>
                                            <label for="default" class="form-check-label pr-2">Default</label>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cover_image">Cover Picture <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group-btn">
                                                <div class="image-upload">
                                                    <img src="{{asset(!empty($record->cover_image)?$record->cover_image:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                    <div class="file-btn">
                                                        <input type="file" id="cover_image" name="cover_image" accept=".jpg,.png">
                                                        <input type="text" id="cover_image" name="cover_image" value="" hidden="">
                                                        <label class="btn btn-info">Upload</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                @endif

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="occupation">Occupation <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="occupation" type="text" name="occupation" value="{{ $record->occupation ?? "" }}" data-validate-length-range="5,20" class="optional form-control">
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
                                <div class="item form-group">
                                    <label for="password-confirm" class="col-form-label col-md-3 col-sm-3 label-align ">Repeat Password</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="password-confirm" type="password" name="password_confirmation" data-validate-linked="password" class="form-control" required="required" autocomplete="new-password">
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
                                        @if (auth()->user()->role_id===5)
                                            <p class="font-weight-bold">Company Admin Profile URL:</p>
                                            <a href="{{route('pro',auth()->user()->id)}}" target="_blank">{{route('pro',auth()->user()->id)}}</a>
                                        @endif
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
@endsection
