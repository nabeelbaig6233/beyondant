@extends('admin.layout.webapp')
@section('page_css')
    <!-- Datatables -->
    <link
        href="{{ asset('assets/admin/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('assets/admin/datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('assets/admin/datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('assets/admin/datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('assets/admin/datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}"
        rel="stylesheet">
@endsection

@section('content')
    <div
        class="right_col"
        role="main">
        <div
            class="">
            <div
                class="page-title">
                <div
                    class="title_left">
                    <h3>{{ !empty($title)?$title:'' }}
                        <small>View</small>
                    </h3>
                </div>


            </div>

            <div
                class="clearfix"></div>

            <div
                class="row">


                <div
                    class="col-md-12 col-sm-12 ">
                    <div
                        class="x_panel">
                        <div
                            class="x_title">
                            <h2>{{ !empty($title)?$title:'' }}
                                <small>View</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link"><i
                                            class="fa fa-chevron-up"></i></a>
                                </li>
                                <li>
                                    <a class="close-link"><i
                                            class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div
                                class="clearfix"></div>
                        </div>
                        <div
                            class="pull-right">
                            <a class="btn btn-primary"
                               href="{{route('user.register')}}">Register</a>
                        </div>
                        <div
                            class="x_content">
                            <div
                                class="row">
                                <div
                                    class="col-sm-12">
                                    <div
                                        class="card-box table-responsive">
                                        <table
                                            id="example1"
                                            class="table table-striped table-bordered"
                                            style="width:100%">
                                            <thead>
                                            <button
                                                type="button"
                                                class="btn btn-danger btn-xs"
                                                id="delete_all">
                                                Delete
                                            </button>
                                            <tr>
                                                <th width="10">
                                                    <input
                                                        type="checkbox"
                                                        id="select_all">All
                                                </th>
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Picture
                                                </th>
                                                <th>
                                                    First Name
                                                </th>
                                                <th>
                                                    Last Name
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Contact
                                                    Number
                                                </th>
                                                <th>
                                                    Occupation
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody id="action-buttons">
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
                    {
                        data: 'checkbox',
                        name: 'checkbox',
                        orderable: false
                    },
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'first_name',
                        name: 'first_name'
                    },
                    {
                        data: 'last_name',
                        name: 'last_name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'contact_number',
                        name: 'contact_number'
                    },
                    {
                        data: 'occupation',
                        name: 'occupation'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]

            });

            document.getElementById('select_all').addEventListener('click', event =>
                (event.target.checked === true) ? Array.from(document.querySelectorAll('.delete_checkbox')).forEach(checkbox =>
                    checkbox.checked = true
                ) : Array.from(document.querySelectorAll('.delete_checkbox')).forEach(checkbox =>
                    checkbox.checked = false
                )
            );
            document.getElementById('delete_all').addEventListener('click', () => {
                let checkboxes = Array.from(document.querySelectorAll('.delete_checkbox:checked'));
                if (checkboxes.length > 0) {
                    let checkboxValue = [];
                    checkboxes.forEach((e) => {
                        checkboxValue.push(e.getAttribute('value'));
                    });
                    // console.log(checkboxValue);
                    let ajax = async () => {
                        await fetch(`{{route(request()->segment(2).'.delete_all')}}`,{
                            method: "post",
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: checkboxValue,
                        }).json().then(r => console.log(r));
                    };
                    ajax();
                }
            });
        });
        (function(){
            let action_buttons = document.querySelector('#action-buttons');
            action_buttons.addEventListener('click', event => {
                if (Number(event.target.parentElement.getAttribute('data-col')) === 3 || event.target.getAttribute('data-col') == 3) {
                    alert(event.target.parentElement.id ?? event.target.id);
                } else if (event.target.parentElement.getAttribute('data-col') == 2 || event.target.getAttribute('data-col') == 2) {
                    alert(event.target.id ?? event.target.parentElement.id);
                }
            });
            /*const views = document.querySelectorAll('.views');
            Array.from(views).forEach(event => {
                event.addEventListener('click',function() {
                    // let id = e.getAttribute('id');
                    alert(1);
                })
            });*/
        })();
    </script>
@endsection
