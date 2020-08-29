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

{{--  Edit Modal  --}}

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="editResellerForm">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-white">Edit Reseller</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 form-group">
                        <input type="text" name="first_name" placeholder="Enter First Name." class="form-control">
                    </div>
                    <div class="col-12 form-group">
                        <input type="text" name="last_name" placeholder="Enter Last Name." class="form-control">
                    </div>
                    <div class="col-12 form-group">
                        <input type="email" name="email" placeholder="Enter Reseller Email." class="form-control">
                    </div>
                    <div class="col-12 form-group">
                        <input type="text" name="phone_number" placeholder="Enter Phone Number." class="form-control">
                    </div>
                    <div class="col-12 form-group">
                        <input type="text" name="city" placeholder="Enter City." class="form-control">
                    </div>
                    <div class="col-12 form-group">
                        <input type="text" name="state" placeholder="Enter State." class="form-control">
                    </div>
                    <div class="col-12 form-group">
                        <textarea name="address" row="2" placeholder="Enter Address." class="form-control"></textarea>
                    </div>
                    <div class="col-12 form-group">
                        <input type="text" name="discount_code" placeholder="Enter Reseller Discount Code." class="form-control">
                    </div>
                    <div class="col-12 form-group">
                        <input type="email" name="master_email" placeholder="Enter Master Reseller Email." class="form-control">
                    </div>
                    <div class="col-12 form-group">
                        <input type="text" name="business_status" placeholder="Enter Business Status" class="form-control">
                    </div>
                    <div class="col-12 form-group">
                        <select class="form-control" name="status" required>
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="col-12 form-group">
                        <select class="form-control" name="reseller_level" required>
                            <option value="">Select Level for Reseller</option>
                            @foreach(['Platinum','Gold','Silver','Bronze','Copper','Stainless','Iron'] as $level)
                                <option value="{{$level}}">{{$level}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row col-12 form-group">
                    <h6 id="master_email_error" class="text-danger"></h6>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" id="updstResellerBtn">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{--  Edit Modal  --}}

{{--  Add Modal  --}}

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="addResellerForm">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title text-white">Create New Reseller</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-center p-2" id="addResellerLoader" style="display: none">
                            <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div class="col-12 form-group">
                            <input type="text" name="first_name" placeholder="Enter First Name." required class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" name="last_name" placeholder="Enter Last Name." required class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <input type="email" name="email" placeholder="Enter Reseller Email." required class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" name="phone_number" placeholder="Enter Phone Number." required class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" name="city" placeholder="Enter City." class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" name="state" placeholder="Enter State." class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <textarea name="address" rows="2" placeholder="Enter Address." class="form-control"></textarea>
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" name="discount_code" placeholder="Enter Reseller Discount Code."  class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" name="sponsor_name" placeholder="Enter Sponsor Name."  class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <select class="form-control" name="status" required>
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <select class="form-control" name="reseller_level" required>
                                <option value="">Select Level for Reseller</option>
                                @foreach(['Platinum','Gold','Silver','Bronze','Copper','Stainless','Iron'] as $level)
                                    <option value="{{$level}}">{{$level}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row col-12 form-group" id="errors">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" id="addResellerBtn">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Add Modal  --}}





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
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" id="add_resller">Add Reseller</button>
                                            <button type="button" class="btn btn-success btn-xs" id="reset_password">Reset Password</button>
                                            <tr>
                                                <th width="10"><input type="checkbox" id="select_all">All</th>
                                                <th>{{ucwords(str_replace('_',' ','id'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','f_name'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','company'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','email'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','website'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','address'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','address_line_two'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','country'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','state'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','city'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','level'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','status'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','profile_url'))}}</th>
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
                                <th>{{ucwords(str_replace('_',' ','f_name'))}}</th>
                                <td id="f_name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','l_name'))}}</th>
                                <td id="l_name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','company'))}}</th>
                                <td id="company" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','email'))}}</th>
                                <td id="email" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','website'))}}</th>
                                <td id="website" align="center"></td>
                            </tr>
                            <tr>
                            <th>{{ucwords(str_replace('_',' ','address'))}}</th>
                            <td id="address" align="center"></td>
                            </tr><tr>
                                <th>{{ucwords(str_replace('_',' ','address_line_two'))}}</th>
                                <td id="address_line_two" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','country'))}}</th>
                                <td id="country" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','city'))}}</th>
                                <td id="city" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','state'))}}</th>
                                <td id="state" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','postal_code'))}}</th>
                                <td id="postal_code" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','fed_tax_id'))}}</th>
                                <td id="fed_tax_id" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','business_phone'))}}</th>
                                <td id="business_phone" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','business_status'))}}</th>
                                <td id="business_status" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','business_status_description'))}}</th>
                                <td id="business_status_description" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','date_organized'))}}</th>
                                <td id="date_organized" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','name_of_owner'))}}</th>
                                <td id="name_of_owner" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','about_beyondant'))}}</th>
                                <td id="about_beyondant" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','num_of_locations'))}}</th>
                                <td id="num_of_locations" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','total_employees'))}}</th>
                                <td id="total_employees" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','sales_employees'))}}</th>
                                <td id="sales_employees" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','preferred_territory'))}}</th>
                                <td id="preferred_territory" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','brands'))}}</th>
                                <td id="brands" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','approx_turnover'))}}</th>
                                <td id="approx_turnover" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','approx_turnover_description'))}}</th>
                                <td id="approx_turnover_description" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','beyondant_promotion'))}}</th>
                                <td id="beyondant_promotion" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','short_paragraph'))}}</th>
                                <td id="short_paragraph" align="center"></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Loading Modal -->
<div class="modal fade" id="resetLoading" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <div class="spinner-border text-danger" style="height: 3rem; width: 3rem;" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <br/><br/>
                    <h6 class="text-dark"><strong>Sending Emails........</strong></h6>
                </div>
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
                pageLength: 10,
                ajax: {
                    url: `{{route('admin.reseller')}}`,
                },
                columns: [
                    {data: 'checkbox', name: 'checkbox', orderable: false},
                    {data: 'id', name: 'id'},
                    {data: 'f_name', name: 'f_name'},
                    {data: 'company', name: 'company'},
                    {data: 'email', name: 'email'},
                    {data: 'website', name: 'website'},
                    {data: 'address', name: 'address'},
                    {data: 'address_line_two', name: 'address_line_two'},
                    {data: 'country', name: 'country'},
                    {data: 'state', name: 'state'},
                    {data: 'city', name: 'city'},
                    {data: 'reseller_level', name: 'level'},
                    {data: 'status', name: 'status',render:function (data, type, row, meta) {
                        var status=data==0?["danger","Inactive"]:["success","Active"];
                        return '<span class="badge badge-'+status[0]+'">'+status[1]+'</span>';
                    }},
                    {data: 'profile_url', name: 'profile_url'},
                    {data: 'action', name: 'action', orderable: false}
                ]
            });

            //Update Reseller


            $('#editModal').on('hidden.bs.modal', function () {
                $("#editResellerForm").trigger('reset');
            });

            var reseller_id;

            $(document).on('click','.edit',function () {
                reseller_id=$(this).attr('id');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'GET',
                    url: `{{url('admin/'.request()->segment(2).'/update')}}/${reseller_id}`,
                    success:function (response) {
                        $("[name=first_name]").val(response.f_name);
                        $("[name=last_name]").val(response.l_name);
                        $("[name=email]").val(response.email);
                        $("[name=city]").val(response.city);
                        $("[name=state]").val(response.state);
                        $("[name=address]").val(response.address);
                        $("[name=master_email]").val(response.master_email);
                        $("[name=phone_number]").val(response.business_phone);
                        $("[name=discount_code]").val(response.discount_code);
                        $("[name=business_status]").val(response.business_status);
                        $("#editModal").modal('show');
                    }
                });
            });

            $("#editResellerForm").submit(function (e) {
                e.preventDefault();
                $("#master_email_error").text("");
                var text=$("#updstResellerBtn").text();
                $("#updstResellerBtn").text("Saving...");
                $("#updstResellerBtn").attr('disabled',true);
                var values={};
                $(this).serializeArray().forEach((item)=>{
                    values[item.name]=item.value;
                });
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'patch',
                    url: `{{url('admin/'.request()->segment(2).'/update')}}/${reseller_id}`,
                    data: {...values},
                    success:function (response) {
                        if(response==1){
                            $("#editModal").modal('hide');
                            $("#updstResellerBtn").text(text);
                            $("#updstResellerBtn").attr('disabled',false);
                            DataTable.ajax.reload();
                            js_success('Reseller Updated Successfully.');
                        }else{
                            $("#updstResellerBtn").text(text);
                            $("#updstResellerBtn").attr('disabled',false);
                            var message=response.master_email[0];
                            $("#master_email_error").text(message);
                        }
                    }
                });
            });

            //End Update Reseller

            //Add Reseller

            $('#addModal').on('shown.bs.modal', function () {
                $('#addResellerForm').trigger('reset');
            });

            $('#addModal').on('hidden.bs.modal', function () {
                $("#errors").empty("");
                $("#addResellerLoader").css({display:'none'});
                $("#addResellerBtn").text("Create");
                $("#addResellerBtn").attr('disabled',false);
                $("#addResellerForm").trigger('reset');
            });


            $("#addResellerForm").submit(function (e) {
                e.preventDefault();
                $("#addResellerBtn").text("Creating...");
                $("#addResellerBtn").attr('disabled',true);
                $("#addResellerLoader").css({display:'block'});
                var values={};
                $(this).serializeArray().forEach((item)=>{
                    values[item.name]=item.value;
                });
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: `{{route("admin.create.reseller")}}`,
                    data: {...values},
                    success:function (response) {
                        if(response==1){
                            $("#addModal").modal('hide');
                            DataTable.ajax.reload();
                            js_success('Reseller Created Successfully.');
                        }else{
                            $("#addResellerBtn").text("Create");
                            $("#addResellerBtn").attr('disabled',false);
                            $("#addResellerLoader").css({display:'none'});
                            var errorDiv=$("#errors");
                            if(response.email){
                                errorDiv.append('<p class="text-danger">'+response.email[0]+'</p>');
                            }
                            if(response.first_name){
                                errorDiv.append('<p class="text-danger">'+response.first_name[0]+'</p>');
                            }
                            if(response.last_name){
                                errorDiv.append('<p class="text-danger">'+response.last_name[0]+'</p>');
                            }
                            if(response.reseller_level){
                                errorDiv.append('<p class="text-danger">'+response.reseller_level[0]+'</p>');
                            }
                            if(response.status){
                                errorDiv.append('<p class="text-danger">'+response.status[0]+'</p>');
                            }
                        }
                    }
                });
            });
            //End's Add Reseller


            // View Records
            $(document,this).on('click','.view',function(){
                let id = $(this).attr('id');
                $.ajax({
                    url:`{{url('admin/'.request()->segment(2).'/view/')}}/${id}`,
                    dataType:"json",
                    success: function (data) {
                        $("#f_name").html(data.f_name);
                        $("#l_name").html(data.l_name);
                        $("#company").html(data.company);
                        $("#email").html(data.email);
                        $("#website").html(data.website);
                        $("#address").html(data.address);
                        $("#address_line_two").html(data.address_line_two);
                        $("#country").html(data.country);
                        $("#state").html(data.state);
                        $("#city").html(data.city);
                        $("#postal_code").html(data.postal_code);
                        $("#fed_tax_id").html(data.fed_tax_id);
                        $("#business_phone").html(data.business_phone);
                        $("#business_status").html(data.business_status);
                        $("#business_status_description").html(data.business_status_description);
                        $("#date_organized").html(data.date_organized);
                        $("#name_of_owner").html(data.name_of_owner);
                        $("#about_beyondant").html(data.about_beyondant);
                        $("#num_of_locations").html(data.num_of_locations);
                        $("#total_employees").html(data.total_employees);
                        $("#sales_employees").html(data.sales_employees);
                        $("#preferred_territory").html(data.preferred_territory);
                        $("#brands").html(data.brands);
                        $("#approx_turnover").html(data.approx_turnover);
                        $("#approx_turnover_description").html(data.approx_turnover_description);
                        $("#beyondant_promotion").html(data.beyondant_promotion);
                        $("#short_paragraph").html(data.short_paragraph);
                        $("#viewModal").modal('show');
                    }
                })
            });

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
            });

            //Reset Password
            //Delete Selected Records
            $(document).on('click','#reset_password',function () {
                let checkbox = $('.delete_checkbox:checked');
                if (checkbox.length > 0) {
                    var checkbox_value = [];
                    $(checkbox).each(function(){
                        checkbox_value.push($(this).val());
                    });
                    $("#resetLoading").modal('show');
                    $.ajax({
                        url:`{{route(request()->segment(2).'.reset_all')}}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data:{checkbox_value:checkbox_value},
                        method:`post`,
                        success: function (data) {
                            $("#resetLoading").modal('hide');
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
