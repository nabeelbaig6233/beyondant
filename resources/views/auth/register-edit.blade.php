@extends('layouts.app')
@section('pageCss')
    <style>

        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }

        .goog-te-gadget .goog-te-combo {
            margin: 4px 0;
            height: 39px;
            background: #be0103;
            border-radius: 5px;
            color: white;
            letter-spacing: 0;
        / / font-weight: 163 px !important;
            font-size: 14px;
            border-color: #be0103;
        }

        .trans-u.float-right {
            margin-top: -6px;
            /* margin-right: 0px; */
            margin-left: 4px;
        }

        #google_translate_element {
            text-align: right;
            display: block
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        body {
            top: 0px !important;
        }

        #goog-gt-tt {
            display: none !important;
            top: 0px !important;
        }

        .goog-tooltip skiptranslate {
            display: none !important;
            top: 0px !important;
        }

        .activity-root {
            display: hide !important;
        }

        .status-message {
            display: hide !important;
        }

        .started-activity-container {
            display: hide !important;
        }

    </style>
@endsection
@section('content')

{{--Emplyee Modal--}}
    <!-- Modal -->
    <div class="modal fade " id="employeeModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="" method="post" id="employeeForm">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle"><strong>Add Employee</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-6">
                        <input type="text" class="form-control" name="f_name" placeholder="First Name" required />
                        </div>
                        <div class="form-group col-6">
                        <input type="text" class="form-control" name="l_name" placeholder="Last Name" required />
                        </div>
                        <div class="form-group col-6">
                            <input type="email" class="form-control" name="email" placeholder="Employee E-mail" required />
                        </div>
                        <div class="form-group col-6">
                        <input type="text" class="form-control" name="title" placeholder="Title" required />
                        </div>
                        <div class="form-group col-12">
                        <input type="text" class="form-control" name="ext" placeholder="Ext." required />
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="phone" name="phone" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999 @php $ext = explode(" ",$record->contact_number); echo !empty($ext[2])? '999' : '' @endphp&quot;" data-mask="" placeholder="Direct Phone Number *"  autocomplete="contact_number">
                        </div>
                        <div class="form-group col-6">
                        <input type="text" class="form-control" name="location" placeholder="Location"  required />
                        </div>

                        <div class="col-12"  id="employee">

                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" id="close" class="btn text-dark">Close</button>
                    <button type="submit" class="btn btn-danger" id="save_emp" style="background-color: #be0103">
                        <span>Save</span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
{{--End Employee Modal--}}
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
                                <h3>Update<span> Your {{$record->acc_type}} Account</span></h3>
                                <p class="p-3"><strong>Desktop Display Is Preferred</strong></p>
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
                                                <input type="text" class="input-text" id="address" name="address"  placeholder="Address *" value="{{ $record->address ?? '' }}"  autocomplete="address">

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="city" name="city"  placeholder="City *" value="{{ $record->city ?? '' }}"  autocomplete="city">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lr">
                                            <div class="form-group">
                                                <input type="text" class="input-text" id="state" name="state"  placeholder="State *" value="{{ $record->state ?? '' }}"  autocomplete="state">
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
                                                <input type="text" class="input-text" id="zipcode" name="zipcode"  placeholder="Zip Code *" value="{{ $record->zipcode ?? '' }}"  autocomplete="zipcode">

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
                                                <select name="acc_type" id="acc_typ" class="input-text" data-validation="required">
                                                    <option value="">Change Account Type</option>
                                                    <option value="company" {{ (($record->acc_type == 'company') ? 'selected' : '' ) }}>Company</option>
                                                    <option value="personal" {{ (($record->acc_type == 'personal') ? 'selected' : '' ) }}>Personal</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-lr">
                                            <div class="form-group">

                                                <button type="submit" class="btn-md btn-theme btn-block">Update Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @can("add_employee",auth()->user())
                                <div class="col-lg-6 col-lr offset-lg-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn-md btn-theme btn-block" data-toggle="modal" data-target="#employeeModal">Add Employee</button>
                                    </div>
                                </div>
                                @endcan




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
        //  var id=0;
        // //
        // function addForms() {
        //     var formElements=`<form name="${id}" id="${id}" class="form-inline form-horizontal p-3" >
        //                             <input type="text" class="form-control col-2" name="f_name" placeholder="First Name" required />
        //                             <input type="text" class="form-control col-2" name="l_name" placeholder="Last Name" required />
        //                             <input type="text" class="form-control col-2" name="title" placeholder="Title" required />
        //                             <input type="text" class="form-control col-2" name="ext" placeholder="Ext." required />
        //                             <input type="text" class="col-2 form-control"  name="phone" placeholder="phone"  required />
        //                             <input type="text" class="form-control col-2 " name="location" placeholder="Location"  required />
        //                       </form>`;
        //     $("#forms").append(formElements);
        //     id++;
        // }

        async function readFormsAndAdd(){

            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': "{{csrf_token()}}"

                }

            });
                var data1=$(`#employeeForm`).serializeArray();

                var value={};
                value["parent_id"]="{{$record->id}}";
                data1.forEach((input)=>{
                    value[input.name]=input.value;

                });
                var response=await $.ajax({
                    url: "{{route("save-employees")}}",
                    type: "POST",
                    data: value
                });
            return response;
        }

        $(document).ready(() => {
            $.validate({
                lang: 'en'
            });


            //Money Euro
            $('[data-mask]').inputmask();

            //Employee Form Deeling

            //addForms();
            // $("#emplyee_form_btn").click(function () {
            //     addForms();
            // });

            $("#employeeForm").submit(function (e) {
                e.preventDefault();
                $("#employee").empty();
                $("#employee").append("<p class='text-dark' id='msg'>Please Wait</p>");
                $("#save_emp").addClass("disabled");
                var result=readFormsAndAdd();
                result.then((res)=>{
                    $("#employee").empty();
                    $("#employee").append("<p class='text-success'>An email was sent to your employee with the needed login credentials</p>");
                    $("#save_emp").removeClass("disabled");

                    $(':input','#employeeForm') .not(':button, :submit, :reset, :hidden') .val('')
                        .removeAttr('checked') .removeAttr('selected');
                    $("#employeeModal").modal().hide();
                    $("#employee").empty();
                    $("#save_emp").removeClass("disabled");
                    js_success("An email was sent to your employee with the needed login credentials");
                    $(".modal-backdrop").remove();

                }).catch((err)=>{
                    $("#employee").empty();
                    $("#employee").append("<p class='text-danger'>An employee with these email already exist</p>");
                    $("#save_emp").removeClass("disabled");
                });
            });

            $("#close").on("click",function () {
                $(':input','#employeeForm') .not(':button, :submit, :reset, :hidden') .val('')
                    .removeAttr('checked') .removeAttr('selected');
                $("#employeeModal").modal().hide();
                $(".modal-backdrop").remove();
            });

        });
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
