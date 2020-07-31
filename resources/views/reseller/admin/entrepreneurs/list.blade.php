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
                                                <th>{{ucwords(str_replace('_',' ','f_name'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','company'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','email'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','website'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','current_primary_web_url'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','address'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','address_line_two'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','country'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','state'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','city'))}}</th>
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
                                <th>{{ucwords(str_replace('_',' ','num_of_websites'))}}</th>
                                <td id="num_of_websites" align="center"></td>
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
                                <th>{{ucwords(str_replace('_',' ','current_primary_web_url'))}}</th>
                                <td id="current_primary_web_url" align="center"></td>
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
                    url: `{{route('admin.entrepreneurs')}}`,
                },
                columns: [
                    {data: 'checkbox', name: 'checkbox', orderable: false},
                    {data: 'id', name: 'id'},
                    {data: 'f_name', name: 'f_name'},
                    {data: 'company', name: 'company'},
                    {data: 'email', name: 'email'},
                    {data: 'website', name: 'website'},
                    {data: 'current_primary_web_url', name: 'current_primary_web_url'},
                    {data: 'address', name: 'address'},
                    {data: 'address_line_two', name: 'address_line_two'},
                    {data: 'country', name: 'country'},
                    {data: 'state', name: 'state'},
                    {data: 'city', name: 'city'},
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
                        $("#num_of_websites").html(data.num_of_websites);
                        $("#total_employees").html(data.total_employees);
                        $("#sales_employees").html(data.sales_employees);
                        $("#current_primary_web_url").html(data.current_primary_web_url);
                        $("#brands").html(data.brands);
                        $("#approx_turnover").html(data.approx_turnover);
                        $("#approx_turnover_description").html(data.approx_turnover_description);
                        $("#beyondant_promotion").html(data.beyondant_promotion);
                        $("#short_paragraph").html(data.short_paragraph);
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
