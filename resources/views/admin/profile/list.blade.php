@extends('admin.layout.webapp')
@section('page_css')
    <!-- Datatables -->
    <link href="{{ asset('assets/admin/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')


    {{--Employee Modal--}}
    <!-- Modal -->
    <div class="modal fade " id="employeeModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="" method="post" id="employeeForm">
                    <div class="modal-header">
                        <h4 class="modal-title text-dark" id="exampleModalLongTitle"><strong>Employee Form</strong></h4>
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}

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
                                <input type="text" class="form-control" id="phone" name="phone" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999 @php $ext = explode(" ",auth()->user()->contact_number); echo !empty($ext[2])? '999' : '' @endphp&quot;" data-mask="" placeholder="Direct Phone Number *"  autocomplete="contact_number">
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control" name="location" placeholder="Location"  required />
                            </div>

                            <div class="col-12"  id="employee">

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" id="close" class="btn btn-light">Close</button>
                        <button type="submit" class="btn btn-primary" id="save_emp" >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--End Employee Modal--}}


    {{--Individual Modal--}}
    <!-- Modal -->
    <div class="modal fade " id="individualModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="" method="POST" id="individualForm">
                    <div class="modal-header">
                        <h4 class="modal-title text-dark" id="exampleModalLongTitle"><strong>Create Account</strong></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <input type="text" class="form-control" name="ind_f_name" placeholder="First Name" required />
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control" name="ind_l_name" placeholder="Last Name" required />
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" name="ind_email" placeholder="E-mail" required />
                            </div>
                            <div class="col-12">
                                <p id="acc_msg"></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close_individual" class="btn btn-secondary">Close</button>
                        <button type="submit" class="btn btn-danger" id="save_individual" >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--End Individual Modal--}}

{{--  Profile Link Modal  --}}
    <div class="modal fade" id="profileLinkModal" tabindex="-1" role="dialog" aria-labelledby="profileLinkModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form id="profileLinkForm">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white">
                        <h5 class="modal-title" id="exampleModalLongTitle">Link Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label for="website">Website</label>
                                <input id="website" type="text" name="website" class="form-control" placeholder="Enter URL">
                            </div>
                            <div class="col-12 form-group">
                                <label for="linkdin">Linkedin</label>
                                <input id="linkdin" type="text" name="linkdin" class="form-control" placeholder="Enter URL">
                            </div>
                            <div class="col-12 form-group">
                                <label for="instagram">Instagram</label>
                                <input id="instagram" type="text" name="instagram" class="form-control" placeholder="Enter URL">
                            </div>
                            <div class="col-12 form-group">
                                <label for="facebook">Facebook</label>
                                <input id="facebook" type="text" name="facebook" class="form-control" placeholder="Enter URL">
                            </div>
                            <div class="col-12 form-group">
                                <label for="tiktok">Tiktok</label>
                                <input id="tiktok" type="text" name="tiktok" class="form-control" placeholder="Enter URL">
                            </div>
                        </div>
                        <div class="row col-12">
                            <div class="form-group">
                                <label>Select What Should Be Your Default Profile?</label>
                                <div class="form-check-inline">
                                    <input id="website_check" type="radio" name="check" value="website"  class="form-check-input">
                                    <label for="website_check" class="form-check-label pr-2">Website</label>
                                    <input id="linkdin_check" type="radio" name="check" value="linkdin"  class="form-check-input">
                                    <label for="linkdin_check" class="form-check-label pr-2">Linkedin</label>
                                    <input id="facebook_check" type="radio" name="check" value="facebook"  class="form-check-input" >
                                    <label for="facebook_check" class="form-check-label pr-2">Facebook</label>
                                    <input id="instagram_check" type="radio" name="check" value="instagram"  class="form-check-input ">
                                    <label for="instagram_check" class="form-check-label pr-2">Instagram</label>
                                    <input id="tiktok_check" type="radio" name="check" value="tiktok"  class="form-check-input ">
                                    <label for="tiktok_check" class="form-check-label pr-2">Tiktok</label>
                                    <input id="default" type="radio" name="check" value=""  class="form-check-input">
                                    <label for="default" class="form-check-label pr-2">Default</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="saveProfileLink">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

{{--  End Profile Link Modal  --}}


    {{--Password Reset Modal--}}
    <!-- Modal -->
    <div class="modal fade " id="resetModal" tabindex="-1" role="dialog"  >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="" method="POST" id="resetForm">
                    <div class="modal-header bg-dark">
                        <h4 class="modal-title text-white" ><strong>Reset Password</strong></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <h4 align="center" id="pr_msg" style="margin: 0;">Are you sure you want to reset password ?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close_pass" class="btn btn-secondary">Close</button>
                        <button type="submit" class="btn btn-danger" id="save_pass" >Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--End Password Reset Modal--}}


    {{--    Device Modal --}}

    <div class="modal fade" id="viewDevices" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="exampleModalLongTitle">View Devices</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="devices" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>{{ucwords(str_replace('_',' ','id'))}}</th>
                                        <th>{{ucwords(str_replace('_',' ','device_name'))}}</th>
                                        <th>{{ucwords(str_replace('_',' ','device_description'))}}</th>
                                        <th>{{ucwords(str_replace('_',' ','profile_url'))}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{--    End Devices Modal --}}



    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>{{ !empty($title)?$title:'' }} <small>View</small></h3>
                </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">


                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ !empty($title)?$title:'' }} <small>View</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>



                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="example1" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <button type="button" class="btn btn-danger btn-xs" id="delete_all">Delete</button>
                                            @can("add_employee",auth()->user())

                                                <button type="submit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#employeeModal">Add Employee</button>

                                            @endcan

                                            @can("create_profile",auth()->user())

                                                <button type="submit" class="btn btn-secondary btn-xs" data-toggle="modal" data-target="#individualModal">Add Account</button>

                                            @endcan

                                            @can('override_permission',auth()->user())

                                                <button type="submit" class="btn btn-info btn-xs" data-toggle="modal" data-target="#confirmOverrideModal">Override Employee Profiles</button>

                                            @endcan

                                            <tr>
                                                <th width="10"><input type="checkbox" id="select_all">All</th>
                                                <th>{{ucwords(str_replace('_',' ','id'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','profile_picture'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','first_name'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','title'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','email'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','company_name'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','contact_number'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','mobile_number'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','profile_link'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','profile_views'))}}</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div id="viewModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #343a40;
            color: #fff;">
                    <h4 class="modal-title">View {{ucwords(str_replace('_',' ',request()->segment(2)))}}</h4>
                    <button type="button" class="close" data-dismiss="modal" style="    color: #fff;">&times;</button>

                </div>
                <div class="modal-body">

                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','profile_picture'))}}</th>
                                <td id="profile_picture" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','cover_image'))}}</th>
                                <td id="cover_image" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','first_name'))}}</th>
                                <td id="first_name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','last_name'))}}</th>
                                <td id="last_name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','job_title'))}}</th>
                                <td id="job_title" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','company_name'))}}</th>
                                <td id="company_name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','company_description'))}}</th>
                                <td id="company_description" align="center"></td>
                            </tr><tr>
                                <th>{{ucwords(str_replace('_',' ','contact_number'))}}</th>
                                <td id="contact_number" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','mobile_number'))}}</th>
                                <td id="mobile_number" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','profile_link'))}}</th>
                                <td id="profile_link" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','email'))}}</th>
                                <td id="email" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','address'))}}</th>
                                <td id="address" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','reseller_code'))}}</th>
                                <td id="reseller_code" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','website'))}}</th>
                                <td id="website" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','linkedin'))}}</th>
                                <td id="linkedin" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','instagram'))}}</th>
                                <td id="instagram" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','facebook'))}}</th>
                                <td id="facebook" align="center"></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="confirmLoginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"  style="background-color: #343a40;
            color: #fff;">
                    <h2 class="modal-title">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to Login into this account?</h4>
                </div>
                <div class="modal-footer">
                    <a href="" id="login_user_link" style="display: none;"></a>
                    <button type="button" id="ok_login" name="ok_login" class="btn btn-danger">Login</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"  style="background-color: #343a40;
            color: #fff;">
                    <h2 class="modal-title">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to delete this ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_delete" name="ok_delete" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div id="confirmUpgradeModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark"  style="color: #fff;">
                    <h2 class="modal-title">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to upgrade this account ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_upgrade" name="ok_upgrade" class="btn btn-success">Upgrade</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="confirmOverrideModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark"  style="color: #fff;">
                    <h2 class="modal-title">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to override employee profile's ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_override" name="ok_override" class="btn btn-success">Confirm Override</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('page_js')
    <!-- DataTable -->
    <script src="{{asset('assets/admin/datatables/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/admin/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admin/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/pdfmake/build/vfs_fonts.js')}}"></script>
    <script>
        $(document).ready(function () {
            var DataTable = $("#example1").DataTable({
                dom: "Blfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn-sm"
                }, {
                    extend: "csv",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                }, {
                    extend: "print",
                    className: "btn-sm"
                }],
                responsive: true,
                processing: true,
                serverSide: true,
                pageLength: 5,
                ajax: {
                    url: `{{route(request()->segment(2))}}`,
                },
                columns: [
                    {data: 'checkbox', name: 'checkbox', orderable: false},
                    {data: 'id', name: 'id'},
                    {data: 'image', name: 'image', orderable: false},
                    {data: 'first_name', name: 'first_name'},
                    {data: 'job_title', name: 'job_title'},
                    {data: 'email', name: 'email'},
                    {data: 'company_name', name: 'company_name'},
                    {data: 'contact_number', name: 'contact_number'},
                    {data: 'mobile_number', name: 'mobile_number'},
                    {data: 'profile_link', name: 'profile_link', orderable: false},
                    {data: 'views', name:'views'},
                    {data: 'action', name: 'action', orderable: false}
                ]
            });

            // View Records
            $(document,this).on('click','.view',function(){
                let id = $(this).attr('id');
                $.ajax({
                    url:`{{url('admin/'.request()->segment(2).'/view/')}}/${id}`,
                    dataType:"json",
                    success: function (data) {
                        var companyData=data.company;
                        var data=data.data;
                        let cover_image="";
                        let profile_picture = (data.profile_picture != undefined) ? `{{asset('/')}}${data.profile_picture}` : `{{asset('assets/admin/images/profile.jpg')}}`;
                        if (data.parent_id==0) {
                            cover_image = (data.cover_image != undefined) ? `{{asset('/')}}${data.cover_image}` : `{{asset('assets/admin/images/placeholder.png')}}`;
                        }
                        else{
                            cover_image = (companyData.cover_image != undefined) ? `{{asset('/')}}${companyData.cover_image}` : `{{asset('assets/admin/images/placeholder.png')}}`;
                        }
                        $("#profile_picture").html(`<img width="100" src="${profile_picture}">`);
                        $("#cover_image").html(`<img width="100" src="${cover_image}">`);
                        $("#first_name").html(data.first_name);
                        $("#last_name").html(data.last_name);
                        $("#job_title").html(data.job_title);
                        $("#company_name").html(data.company_name);
                        $("#company_description").html(data.company_description);
                        $("#contact_number").html(data.contact_number);
                        $("#mobile_number").html(data.mobile_number);
                        $("#profile_link").html(`{{route('pro')}}/${data.id}`);
                        $("#email").html(data.email);
                        $("#address").html(data.address);
                        $("#reseller_code").html(data.reseller_code);
                        $("#website").html(data.website);
                        $("#linkedin").html(data.linkedin);
                        $("#instagram").html(data.instagram);
                        $("#facebook").html(data.facebook);
                        $("#viewModal").modal('show');
                    }
                })
            })

            var delete_id;
            $(document,this).on('click','.delete',function(){
                delete_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });
            $(document).on('click','#ok_delete',function(){
                $.ajax({
                    type:"delete",
                    url:`{{url('admin/'.request()->segment(2).'/destroy/')}}/${delete_id}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function(){
                        $('#ok_delete').text('Deleting...');
                        $('#ok_delete').attr("disabled",true);
                    },
                    success: function (data) {
                        DataTable.ajax.reload();
                        $('#ok_delete').text('Delete');
                        $('#ok_delete').attr("disabled",false);
                        $('#confirmModal').modal('hide');
                        js_success(data);
                    }
                })
            });


            //Individual account



            $("#individualModal").on('hide.bs.modal', function(){
                $("[name=ind_f_name]").val("");
                $("[name=ind_l_name]").val("");
                $("[name=ind_email]").val("");
                $("#acc_msg").text("");
                $("#save_individual").attr("disabled",false);
                $("#close_individual").attr("disabled",false);
                $("#individualForm").trigger("reset");

            });


            $("#close_individual").click(function () {
                $("#individualModal").modal('hide');
            });

            async function addIndividual(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    }
                });
                $("#acc_msg").text("Please wait...");
                $("#save_individual").attr("disabled",true);
                $("#close_individual").attr("disabled",true);
                var val={};
                var data=$("#individualForm").serializeArray();
                data.forEach((form)=>{
                    val[form.name]=form.value;
                });
                val["parent_id"]=0;
                val["acc_type"]="personal";
                $.ajax({
                    url:"{{route("save_account")}}",
                    type:"POST",
                    data:val,
                    success:function (data) {
                        $("#acc_msg").text("");
                        $("#individualModal").modal('hide');
                        DataTable.ajax.reload();
                        js_success("An email was sent with the needed login credentials")
                    },
                    error:function (error) {
                        $("#acc_msg").text("An account with this email already exist.")
                    }
                })

            }

            $("#individualForm").submit(function (e) {
                e.preventDefault();
                addIndividual();
            });


            //End Individual account

            //Password Modal;



            $("#resetModal").on('hide.bs.modal', function(){
                $("#pr_msg").text("Are you sure you want to reset password ?");
                $("#save_pass").attr("disabled",false).attr("data-id","");
                $("#close_pass").attr("disabled",false);
                $("#resetForm").trigger("reset");

            });

            $(document).on('click','.reset_password',function () {
                let id=$(this).attr("id");
                $("#save_pass").attr("data-id",id);
                $("#resetModal").modal('show');

        });

            $("#close_pass").click(function () {
                $("#resetModal").modal('hide');
            });


            async function resetPassword(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    }
                });

                    $("#pr_msg").text("Please wait...");
                    $("#save_pass").attr("disabled",true);
                    $("#close_pass").attr("disabled",true);
                    var val={};
                    var data=$("#resetForm").serializeArray();
                    data.forEach((form)=>{
                        val[form.name]=form.value;
                    });
                    val["id"]=$("#save_pass").attr("data-id");
                    $.ajax({
                        url:"{{route("reset_account_pass")}}",
                        type:"POST",
                        data:val,
                        success:function (data) {
                            $("#pr_msg").text("");
                            $("#resetModal").modal('hide');
                            DataTable.ajax.reload();
                            js_success("An email was sent with the new password")
                        },
                        error:function (error) {
                            console.log(error);
                            // $("#pr_msg").text("An account with this email already exist.")
                        }
                    });

            }

            $("#resetForm").submit(function (e) {
                e.preventDefault();
                resetPassword();
            });


            //End Password Modal




            {{--    //Device Modal JS--}}



            async function deviceFormsAndAdd(name){

                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': "{{csrf_token()}}"

                    }

                });
                var data1=$(`#deviceForm`).serializeArray();

                var value={};
                data1.forEach((input)=>{
                    value[input.name]=input.value;
                });
                if($("#save_device").attr("data-id")) {
                    value["id"] = $("#save_device").attr("data-id");
                }
                var response=await $.ajax({
                    url: name=='edit'?`{{url('admin/'.request()->segment(2).'/update/')}}/${$("#save_device").attr("data-id")}`:`{{route("device.create")}}`,
                    type: "POST",
                    data: value
                });
                return response;
            }

            $('#deviceModal').on('hidden.bs.modal', function () {
                $("[name='device_name']").val('');
                $("[name='device_description']").val('');
                $("#save_device").attr("data","");
                $("#save_device").removeAttr("data-id");
                $("#save_device").removeClass("disabled");
                $("#device").empty();
            });

            var DevicesDataTable = $("#devices").DataTable({
                dom: "Blfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn-sm"
                }, {
                    extend: "csv",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                }, {
                    extend: "print",
                    className: "btn-sm"
                }],
                responsive: true,
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'device_name', name: 'device_name', orderable: false},
                    {data: 'device_description', name: 'device_description'},
                    {data: 'profile_url', name: 'profile_url',render:function (data,type,row) {
                            var url;
                            if(row['redirected_url'] )
                                url=row['redirected_url'];
                            else
                                url=data;
                            return '<a href="'+url+'" target="_blank">'+data+'</a>';
                        }},
                ]
            });




            $("#deviceForm").submit(function (e) {
                e.preventDefault();
                $("#device").empty();
                $("#device").append("<p class='text-dark' id='msg'>Please Wait</p>");
                $("#save_device").addClass("disabled");

                if($("#save_device").attr("data")=="edit"){
                    var result = deviceFormsAndAdd('edit');
                    result.then((res) => {

                        $("#deviceModal").modal('hide');

                        DataTable.ajax.reload();
                        js_success("Device has been updated");
                    }).catch((err) => {
                        console.log(err);
                        $("#device").empty();
                        $("#device").append("<p class='text-danger'>Something Went Wrong</p>");
                        $("#save_device").removeClass("disabled");
                    });

                }else {

                    var result = deviceFormsAndAdd('save');
                    result.then((res) => {
                        $("#deviceModal").modal('hide');
                        if(parseInt(res)==1) {
                            DataTable.ajax.reload();
                            js_success("A Device Has Been Attached To An Account");
                        }else{
                            js_error("Only 5 Devices Are Allowed.");
                        }
                    }).catch((err) => {
                        console.log(err);
                        $("#device").empty();
                        $("#device").append("<p class='text-danger'>Something Went Wrong</p>");
                        $("#save_device").removeClass("disabled");
                    });
                }
            });

            $(document).on("click",".edit",function () {
                $("#save_device").attr("data","edit");
                let id = $(this).attr('id');
                $("#save_device").attr("data-id",id);
                $.get(`{{url('admin/'.request()->segment(2).'/view/')}}/${id}`,function (data) {
                    var data=data.data;
                    $("[name='device_name']").val(data.device_name);
                    $("[name='device_description']").val(data.device_description);
                });
                $("#deviceModal").modal('show');
            });


            $(document).on('click','.add_device',function () {
                let id=$(this).attr("id");
                $('#save_device').attr("data-id",id);
                $("#deviceModal").modal('show');
            });


            $(document).on('click','.device',function () {
                let id=$(this).attr("id");
                $.ajax({
                    url:`{{url('admin/device/view_devices/')}}/${id}`,
                    dataType:"json",
                    success: function (data) {
                        console.log(data.devices);
                        DevicesDataTable.clear().draw();
                        DevicesDataTable.rows.add(data.devices);
                        DevicesDataTable.columns.adjust().draw();
                        $("#viewDevices").modal('show');
                    }
                });
            });


            {{--$(document).on("click",".link",function () {--}}
            {{--    let id = $(this).attr('id');--}}
            {{--    $("#save_profile").attr("data-id",id);--}}
            {{--    $.get(`{{url('admin/'.request()->segment(2).'/profile/')}}/${id}`,function (data) {--}}
            {{--        $("[name='profile_url']").val(data.profile_url);--}}
            {{--    });--}}
            {{--    $("#profileModal").modal('show');--}}
            {{--});--}}

            {{--$("#profileForm").submit(function (e) {--}}
            {{--    e.preventDefault();--}}
            {{--    $.ajaxSetup({--}}
            {{--        headers: {--}}
            {{--            'X-CSRF-TOKEN': "{{csrf_token()}}"--}}
            {{--        }--}}
            {{--    });--}}
            {{--    let id = $("#save_profile").attr('data-id');--}}
            {{--    $.ajax({--}}
            {{--        type: 'POST',--}}
            {{--        url: `{{url('admin/'.request()->segment(2).'/profile/')}}/${id}`,--}}
            {{--        data:{'profile_url':$("[name='profile_url']").val()},--}}
            {{--        success:function (data) {--}}
            {{--            console.log(data);--}}
            {{--            $("#profileModal").modal('hide');--}}
            {{--            DataTable.ajax.reload();--}}
            {{--            js_success("Profile Linked Successfully");--}}
            {{--        },--}}
            {{--        error:function (err) {--}}
            {{--            console.log(err);--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}

            {{--$("#close_profile").click(function () {--}}
            {{--    $("#profileModal").modal('hide');--}}
            {{--});--}}


            // $('#deviceModal').on('hidden.bs.modal', function () {
            //     $("#profileForm").trigger('reset');
            // });


            $("#close_device").on("click",function () {
                $(':input','#deviceForm') .not(':button, :submit, :reset, :hidden') .val('')
                    .removeAttr('checked') .removeAttr('selected');
                $("#deviceModal").modal('hide');
            });

            {{--    //Device Modal JS End's--}}









            //EMPlOYEE Modal JS



            async function readFormsAndAdd(name){

                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': "{{csrf_token()}}"

                    }

                });
                var data1=$(`#employeeForm`).serializeArray();

                var value={};
                value["parent_id"]="{{auth()->user()->id}}";
                data1.forEach((input)=>{
                    value[input.name]=input.value;

                });
                var response=await $.ajax({
                    url: name=='edit'?`{{url("update_emp")}}/${$("#save_emp").attr("data-id")}`:`{{route("save-employees")}}`,
                    type: "POST",
                    data: value
                });
                return response;
            }

            $('#employeeModal').on('hidden.bs.modal', function () {
                $("[name='f_name']").val('');
                $("[name='l_name']").val('');
                $("[name='title']").val('');
                $("[name='email']").val('');
                $("[name='ext']").val('');
                $("[name='phone']").val('');
                $("[name='location']").val('');
                $("#save_emp").attr("data","");
                $("#save_emp").removeAttr("data-id");
                $("#save_emp").removeClass("disabled");
                $("#employee").empty();
            });





            $("#employeeForm").submit(function (e) {
                e.preventDefault();
                $("#employee").empty();
                $("#employee").append("<p class='text-dark' id='msg'>Please Wait</p>");
                $("#save_emp").addClass("disabled");

                if($("#save_emp").attr("data")=="edit"){
                    var result = readFormsAndAdd('edit');
                    result.then((res) => {
                        //$("#employee").empty();
                        // $("#employee").append("<p class='text-success'>An email was sent to your employee with the needed login credentials</p>");
                        // $("#save_emp").removeClass("disabled");
                        //
                        // $(':input', '#employeeForm').not(':button, :submit, :reset, :hidden').val('')
                        //    .removeAttr('checked').removeAttr('selected');
                        $("#employeeModal").modal('hide');
                        // $("#employee").empty();
                        // $("#save_emp").removeClass("disabled");
                        DataTable.ajax.reload();
                        js_success("Employee Profile has been updated");
                    }).catch((err) => {
                        console.log(err);
                        $("#employee").empty();
                        $("#employee").append("<p class='text-danger'>An employee with these email already exist</p>");
                        $("#save_emp").removeClass("disabled");
                    });

                }else {

                    var result = readFormsAndAdd('save');
                    result.then((res) => {
                        //$("#employee").empty();
                        // $("#employee").append("<p class='text-success'>An email was sent to your employee with the needed login credentials</p>");
                        // $("#save_emp").removeClass("disabled");
                        //
                        // $(':input', '#employeeForm').not(':button, :submit, :reset, :hidden').val('')
                        //    .removeAttr('checked').removeAttr('selected');
                        $("#employeeModal").modal('hide');
                        // $("#employee").empty();
                        // $("#save_emp").removeClass("disabled");
                        DataTable.ajax.reload();
                        js_success("An email was sent to your employee with the needed login credentials");
                    }).catch((err) => {
                        $("#employee").empty();
                        $("#employee").append("<p class='text-danger'>An employee with these email already exist</p>");
                        $("#save_emp").removeClass("disabled");
                    });
                }
            });

            $(document).on("click",".edit",function () {
                $("#save_emp").attr("data","edit");
                let id = $(this).attr('id');
                $("#save_emp").attr("data-id",id);
                $.get(`{{url('admin/'.request()->segment(2).'/view/')}}/${id}`,function (data) {
                    var data=data.data;
                    $("[name='f_name']").val(data.first_name);
                    $("[name='l_name']").val(data.last_name);
                    $("[name='title']").val(data.job_title);
                    $("[name='email']").val(data.email);
                    $("[name='ext']").val(data.ext);
                    $("[name='phone']").val(data.contact_number);
                    $("[name='location']").val(data.address);
                });
                $("#employeeModal").modal('show');
            });


            $("#close").on("click",function () {
                $(':input','#employeeForm') .not(':button, :submit, :reset, :hidden') .val('')
                    .removeAttr('checked') .removeAttr('selected');
                $("#employeeModal").modal('hide');
            });

            //EMPlOYEE Modal JS End's


            //Upgrade Profile

            $("#ok_upgrade").click(function () {
                let id=$(this).attr("data-id");
                $('#ok_upgrade').text('Upgrading...');
                $('#ok_upgrade').attr("disabled",true);
                fetch(`{{url('admin/upgrade/account')}}/${id}`,{
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain",
                        "X-CSRF-TOKEN": `{{csrf_token()}}`
                    },
                    method:'PATCH'
                }).then(res=>res.json())
                    .then(function(data){
                        $('#ok_upgrade').text('Upgrade');
                        $('#ok_upgrade').attr("disabled",false);
                        $("#confirmUpgradeModal").modal('hide');
                        $(this).removeAttr("data-id");
                        js_success(data.response);
                        DataTable.ajax.reload();
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            });

            $(document).on('click','.upgrade',function () {
                var id = $(this).attr("id");
                $("#ok_upgrade").attr("data-id",id);
                $("#confirmUpgradeModal").modal('show');
            });

            //End Upgrade Profile


            //Override Profile

            $("#ok_override").click(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    }
                });
                var text=$(this).text();
                $(this).text('Overriding...');
                $(this).attr("disabled",true);
                $.ajax({
                    url:'{{route('profile.override.all',auth()->user()->id)}}',
                    type:'PATCH',
                    success:function () {
                        $("#confirmOverrideModal").modal('hide');
                        js_success('Successfully! Override All Profiles.');
                        DataTable.ajax.reload();
                        $("#ok_override").text(text);
                        $("#ok_override").attr('disabled',false);
                    },
                    error:function (err) {
                        console.log(err);
                    }
                })
            });

            $(document).on('change','.override',function () {
                let id=$(this).attr('id').split(':')[1];
                $.ajax({
                    type:'GET',
                    url:`{{url('admin/'.request()->segment(2).'/override/allow_employee/')}}/${id}`,
                    success:function () {
                    }
                })
            });

            //End Override Profile


            //Link Profile Acoount
            var profile_id;
            $(document).on('click','.link_profile',function () {
                profile_id=$(this).attr('id');
                $.ajax({
                    url:`{{url('/admin/'.request()->segment(2).'/view/')}}/${profile_id}`,
                    type:'GET',
                    success:function (data) {
                        var data=data.data;
                        $("#website").val(data.website);
                        $("#linkdin").val(data.linkedin);
                        $("#facebook").val(data.facebook);
                        $("#instagram").val(data.instagram);
                        $("#tiktok").val(data.tiktok);
                        //check boxes
                        if(data.website_check==1){
                            $('#website_check').attr('checked',true);
                        }
                        else if(data.linkedin_check==1){
                            $('#linkdin_check').attr('checked',true);
                        }
                        else if(data.facebook_check==1){
                            $('#facebook_check').attr('checked',true);
                        }
                        else if(data.instagram_check==1){
                            $('#instagram_check').attr('checked',true);
                        }
                        else if(data.tiktok_check==1){
                            $('#tiktok_check').attr('checked',true);
                        }
                        else{
                            $("#default").attr('checked',true);
                        }
                        $("#profileLinkModal").modal('show');
                    }
                });
            });

            $('#saveProfileLink').click(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    }
                });
                var formData={};
                $("#profileLinkForm").serializeArray().forEach((formItem)=>{
                   formData[formItem.name]=formItem.value;
                });
                var thisButton=$(this);
                var text=thisButton.text();
                $(thisButton).text('Saving...');
                $(thisButton).attr('disabled',true);
                $.ajax({
                    url:`{{url('/admin/'.request()->segment(2).'/link/update')}}/${profile_id}`,
                    type:'POST',
                    data:{...formData},
                    success:function (data) {
                        $("#profileLinkModal").modal('hide');
                        $(thisButton).text(text);
                        $(thisButton).attr('disabled',false);
                        js_success("Profile Linked Successfully");
                    }
                })
            });

            //End Link Profile Accoun

            //Login To Different Account
            $(document).on('click','.login_user',function () {
                var login_user_id=$(this).attr('id');
                var url=`{{route("login_as_user",':id')}}`;
                url=url.replace(':id',login_user_id);
                $("#login_user_link").attr('href',url);
                $("#confirmLoginModal").modal('show');
            });

            $("#ok_login").click(function () {
                $(this).text("Logging In...");
                $(this).attr('disabled',true);
                $("#login_user_link")[0].click();
            });

            //End Login To Different Account

            // Selecting all Checkboxes
            $(document).on("click","#select_all",function() {
                if (this.checked) {
                    $(":checkbox").each(function(){
                        this.checked = true;
                    });
                } else {
                    $(':checkbox').each(function(){
                        this.checked = false;
                    })
                }
            });

            //Delete Selected Records
            $(document).on('click','#delete_all',function () {
                let checkbox = $('.delete_checkbox:checked');
                if (checkbox.length > 0) {
                    var checkbox_value = [];
                    $(checkbox).each(function(){
                        checkbox_value.push($(this).val());
                    });
                    $.ajax({
                        url:`{{route(request()->segment(2).'.delete_all')}}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data:{checkbox_value:checkbox_value},
                        method:`post`,
                        success: function (data) {
                            DataTable.ajax.reload();
                            js_success(data);
                        }
                    });
                } else {
                    js_error('Select atleast one record');
                }
            })
        })
    </script>
@endsection
