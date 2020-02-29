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
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{route('user.register')}}">Register</a>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="example1" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th width="10"><input type="checkbox" id="select_all">All</th>
                                                <th>ID</th>
                                                <th>Picture</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact Number</th>
                                                <th>Occupation</th>
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
@endsection

@section('page_js')
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
                    {data: 'image', name: 'image'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'contact_number', name: 'contact_number'},
                    {data: 'occupation', name: 'occupation'},
                    {data: 'action', name: 'action', orderable: false}
                ]

            });
        })
    </script>
@endsection
