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
                                            <tr>
                                                <th width="10"><input type="checkbox" id="select_all">All</th>
                                                <th>{{ucwords(str_replace('_',' ','id'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','profile_picture'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','name'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','title'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','email'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','company_name'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','phone_number'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','mobile_number'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','fax_number'))}}</th>
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
                                <th>{{ucwords(str_replace('_',' ','name'))}}</th>
                                <td id="name" align="center"></td>
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
                                <th>{{ucwords(str_replace('_',' ','phone_number'))}}</th>
                                <td id="phone_number" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','mobile_number'))}}</th>
                                <td id="mobile_number" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','fax_number'))}}</th>
                                <td id="fax_number" align="center"></td>
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
                    url: `{{route(request()->segment(2))}}`,
                },
                columns: [
                    {data: 'checkbox', name: 'checkbox', orderable: false},
                    {data: 'id', name: 'id'},
                    {data: 'image', name: 'image', orderable: false},
                    {data: 'name', name: 'name'},
                    {data: 'job_title', name: 'job_title'},
                    {data: 'email', name: 'email'},
                    {data: 'company_name', name: 'company_name'},
                    {data: 'phone_number', name: 'phone_number'},
                    {data: 'mobile_number', name: 'mobile_number'},
                    {data: 'fax_number', name: 'fax_number'},
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
                        let profile_picture = (data.profile_picture != undefined) ? `{{asset('')}}/${data.profile_picture}` : `{{asset('assets/admin/images/profile.jpg')}}`;
                        let cover_image = (data.cover_image != undefined) ? `{{asset('')}}/${data.cover_image}` : `{{asset('assets/admin/images/placeholder.png')}}`;
                        $("#profile_picture").html(`<img width="100" src="${profile_picture}">`);
                        $("#cover_image").html(`<img width="100" src="${cover_image}">`);
                        $("#name").html(data.name);
                        $("#job_title").html(data.job_title);
                        $("#company_name").html(data.company_name);
                        $("#company_description").html(data.company_description);
                        $("#phone_number").html(data.phone_number);
                        $("#mobile_number").html(data.mobile_number);
                        $("#fax_number").html(data.fax_number);
                        $("#email").html(data.email);
                        $("#address").html(data.address);
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
