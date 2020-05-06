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
    <div class="modal fade " id="deviceModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="" method="post" id="deviceForm">
                    <div class="modal-header">
                        <h4 class="modal-title text-dark" id="exampleModalLongTitle"><strong>Device Form</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="device_name" placeholder="Device Name" required />
                            </div>
                            <div class="form-group col-12">
                                <textarea name="device_description" class="form-control" placeholder="Device Description" required></textarea>
                            </div>
                            <div class="col-12"  id="device">

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" id="close" class="btn btn-light">Close</button>
                        <button type="submit" class="btn btn-danger" id="save_device" >Save Device</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--End Employee Modal--}}


    {{--Link Modal--}}
    <!-- Modal -->
    <div class="modal fade " id="profileModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="" method="POST" id="profileForm">
                    <div class="modal-header">
                        <h4 class="modal-title text-dark" id="exampleModalLongTitle"><strong>Device Link</strong></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="url" class="form-control" name="profile_url" placeholder="Primary Web Page: http://www.example.com" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close_profile" class="btn btn-secondary">Close</button>
                        <button type="submit" class="btn btn-danger" id="save_profile" >Link Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--End Link Modal--}}


    {{--Password Reset Modal--}}
    <!-- Modal -->
{{--    <div class="modal fade " id="resetModal" tabindex="-1" role="dialog"  >--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <form action="" method="POST" id="resetForm">--}}
{{--                    <div class="modal-header bg-dark">--}}
{{--                        <h4 class="modal-title text-white" ><strong>Reset Password</strong></h4>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <h4 align="center" id="pr_msg" style="margin: 0;">Are you sure you want to reset password ?</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" id="close_pass" class="btn btn-secondary">Close</button>--}}
{{--                        <button type="submit" class="btn btn-danger" id="save_pass" >Reset Password</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    {{--End Password Reset Modal--}}




    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
{{--                    {{ !empty($title)?$title:'' }} <small>View</small>--}}
                    <h3>My Devices</h3>
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
                                        <table id="devices" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <button type="button" class="btn btn-danger btn-xs" id="delete_all">Delete</button>
{{--                                            <button type="submit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#deviceModal">Add Device</button>--}}


                                            <tr>
                                                <th width="10"><input type="checkbox" id="select_all">All</th>
                                                <th>{{ucwords(str_replace('_',' ','id'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','device_name'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','device_description'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','device_url'))}}</th>
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

{{--    <div id="viewModal" class="modal fade" role="dialog">--}}
{{--        <div class="modal-dialog modal-dialog-centered">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header" style="background-color: #343a40;--}}
{{--            color: #fff;">--}}
{{--                    <h4 class="modal-title">View {{ucwords(str_replace('_',' ',request()->segment(2)))}}</h4>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" style="    color: #fff;">&times;</button>--}}

{{--                </div>--}}
{{--                <div class="modal-body">--}}

{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-hover table-striped">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','profile_picture'))}}</th>--}}
{{--                                <td id="profile_picture" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','cover_image'))}}</th>--}}
{{--                                <td id="cover_image" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','first_name'))}}</th>--}}
{{--                                <td id="first_name" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','last_name'))}}</th>--}}
{{--                                <td id="last_name" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','job_title'))}}</th>--}}
{{--                                <td id="job_title" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','company_name'))}}</th>--}}
{{--                                <td id="company_name" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','company_description'))}}</th>--}}
{{--                                <td id="company_description" align="center"></td>--}}
{{--                            </tr><tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','contact_number'))}}</th>--}}
{{--                                <td id="contact_number" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','mobile_number'))}}</th>--}}
{{--                                <td id="mobile_number" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','profile_link'))}}</th>--}}
{{--                                <td id="profile_link" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','email'))}}</th>--}}
{{--                                <td id="email" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','address'))}}</th>--}}
{{--                                <td id="address" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','website'))}}</th>--}}
{{--                                <td id="website" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','linkedin'))}}</th>--}}
{{--                                <td id="linkedin" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','instagram'))}}</th>--}}
{{--                                <td id="instagram" align="center"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>{{ucwords(str_replace('_',' ','facebook'))}}</th>--}}
{{--                                <td id="facebook" align="center"></td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

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
            var DataTable = $("#devices").DataTable({
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
                    {data: 'device_name', name: 'device_name', orderable: false},
                    {data: 'device_description', name: 'device_description'},
                    {data: 'profile_url', name: 'profile_url',render:function (data,type,row) {
                            var url;
                            if(row['redirected_url'])
                                url=row['redirected_url'];
                            else
                                url=data;
                            return '<a href="'+url+'" target="_blank">'+data+'</a>';
                        }},
                    {data: 'action', name: 'action', orderable: false}
                ]
            });

            // View Records
        {{--    $(document,this).on('click','.view',function(){--}}
        {{--        let id = $(this).attr('id');--}}
        {{--        $.ajax({--}}
        {{--            url:`{{url('admin/'.request()->segment(2).'/view/')}}/${id}`,--}}
        {{--            dataType:"json",--}}
        {{--            success: function (data) {--}}
        {{--                var companyData=data.company;--}}
        {{--                var data=data.data;--}}
        {{--                let cover_image="";--}}
        {{--                let profile_picture = (data.profile_picture != undefined) ? `{{asset('/')}}${data.profile_picture}` : `{{asset('assets/admin/images/profile.jpg')}}`;--}}
        {{--                if (data.parent_id==0) {--}}
        {{--                    cover_image = (data.cover_image != undefined) ? `{{asset('/')}}${data.cover_image}` : `{{asset('assets/admin/images/placeholder.png')}}`;--}}
        {{--                }--}}
        {{--                else{--}}
        {{--                    cover_image = (companyData.cover_image != undefined) ? `{{asset('/')}}${companyData.cover_image}` : `{{asset('assets/admin/images/placeholder.png')}}`;--}}
        {{--                }--}}
        {{--                $("#profile_picture").html(`<img width="100" src="${profile_picture}">`);--}}
        {{--                $("#cover_image").html(`<img width="100" src="${cover_image}">`);--}}
        {{--                $("#first_name").html(data.first_name);--}}
        {{--                $("#last_name").html(data.last_name);--}}
        {{--                $("#job_title").html(data.job_title);--}}
        {{--                $("#company_name").html(data.company_name);--}}
        {{--                $("#company_description").html(data.company_description);--}}
        {{--                $("#contact_number").html(data.contact_number);--}}
        {{--                $("#mobile_number").html(data.mobile_number);--}}
        {{--                $("#profile_link").html(`{{route('pro')}}/${data.id}`);--}}
        {{--                $("#email").html(data.email);--}}
        {{--                $("#address").html(data.address);--}}
        {{--                $("#website").html(data.website);--}}
        {{--                $("#linkedin").html(data.linkedin);--}}
        {{--                $("#instagram").html(data.instagram);--}}
        {{--                $("#facebook").html(data.facebook);--}}
        {{--                $("#viewModal").modal('show');--}}
        {{--            }--}}
        {{--        })--}}
        {{--    })--}}

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


        {{--    //Individual account--}}



        {{--    $("#individualModal").on('hide.bs.modal', function(){--}}
        {{--        $("[name=ind_f_name]").val("");--}}
        {{--        $("[name=ind_l_name]").val("");--}}
        {{--        $("[name=ind_email]").val("");--}}
        {{--        $("#acc_msg").text("");--}}
        {{--        $("#save_individual").attr("disabled",false);--}}
        {{--        $("#close_individual").attr("disabled",false);--}}
        {{--        $("#individualForm").trigger("reset");--}}

        {{--    });--}}


        {{--    $("#close_individual").click(function () {--}}
        {{--        $("#individualModal").modal('hide');--}}
        {{--    });--}}

        {{--    async function addIndividual(){--}}
        {{--        $.ajaxSetup({--}}
        {{--            headers: {--}}
        {{--                'X-CSRF-TOKEN': "{{csrf_token()}}"--}}
        {{--            }--}}
        {{--        });--}}
        {{--        $("#acc_msg").text("Please wait...");--}}
        {{--        $("#save_individual").attr("disabled",true);--}}
        {{--        $("#close_individual").attr("disabled",true);--}}
        {{--        var val={};--}}
        {{--        var data=$("#individualForm").serializeArray();--}}
        {{--        data.forEach((form)=>{--}}
        {{--            val[form.name]=form.value;--}}
        {{--        });--}}
        {{--        val["parent_id"]=0;--}}
        {{--        val["acc_type"]="personal";--}}
        {{--        $.ajax({--}}
        {{--            url:"{{route("save_account")}}",--}}
        {{--            type:"POST",--}}
        {{--            data:val,--}}
        {{--            success:function (data) {--}}
        {{--                $("#acc_msg").text("");--}}
        {{--                $("#individualModal").modal('hide');--}}
        {{--                DataTable.ajax.reload();--}}
        {{--                js_success("An email was sent with the needed login credentials")--}}
        {{--            },--}}
        {{--            error:function (error) {--}}
        {{--                $("#acc_msg").text("An account with this email already exist.")--}}
        {{--            }--}}
        {{--        })--}}

        {{--    }--}}

        {{--    $("#individualForm").submit(function (e) {--}}
        {{--        e.preventDefault();--}}
        {{--        addIndividual();--}}
        {{--    });--}}


        {{--    //End Individual account--}}

        {{--    //Password Modal;--}}



        {{--    $("#resetModal").on('hide.bs.modal', function(){--}}
        {{--        $("#pr_msg").text("Are you sure you want to reset password ?");--}}
        {{--        $("#save_pass").attr("disabled",false).attr("data-id","");--}}
        {{--        $("#close_pass").attr("disabled",false);--}}
        {{--        $("#resetForm").trigger("reset");--}}

        {{--    });--}}

        {{--    $(document).on('click','.reset_password',function () {--}}
        {{--        let id=$(this).attr("id");--}}
        {{--        $("#save_pass").attr("data-id",id);--}}
        {{--        $("#resetModal").modal('show');--}}

        {{--});--}}

        {{--    $("#close_pass").click(function () {--}}
        {{--        $("#resetModal").modal('hide');--}}
        {{--    });--}}


        {{--    async function addIndividual(id){--}}
        {{--        $.ajaxSetup({--}}
        {{--            headers: {--}}
        {{--                'X-CSRF-TOKEN': "{{csrf_token()}}"--}}
        {{--            }--}}
        {{--        });--}}

        {{--            $("#pr_msg").text("Please wait...");--}}
        {{--            $("#save_pass").attr("disabled",true);--}}
        {{--            $("#close_pass").attr("disabled",true);--}}
        {{--            var val={};--}}
        {{--            var data=$("#resetForm").serializeArray();--}}
        {{--            data.forEach((form)=>{--}}
        {{--                val[form.name]=form.value;--}}
        {{--            });--}}
        {{--            val["id"]=$("#save_pass").attr("data-id");--}}
        {{--            $.ajax({--}}
        {{--                url:"{{route("reset_account_pass")}}",--}}
        {{--                type:"POST",--}}
        {{--                data:val,--}}
        {{--                success:function (data) {--}}
        {{--                    $("#pr_msg").text("");--}}
        {{--                    $("#resetModal").modal('hide');--}}
        {{--                    DataTable.ajax.reload();--}}
        {{--                    js_success("An email was sent with the new password")--}}
        {{--                },--}}
        {{--                error:function (error) {--}}
        {{--                    console.log(error);--}}
        {{--                    // $("#pr_msg").text("An account with this email already exist.")--}}
        {{--                }--}}
        {{--            });--}}

        {{--    }--}}

        {{--    $("#resetForm").submit(function (e) {--}}
        {{--        e.preventDefault();--}}
        {{--        addIndividual();--}}
        {{--    });--}}


        {{--    //End Password Modal--}}




        {{--    //EMPlOYEE Modal JS--}}



            async function readFormsAndAdd(name){

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





            $("#deviceForm").submit(function (e) {
                e.preventDefault();
                $("#device").empty();
                $("#device").append("<p class='text-dark' id='msg'>Please Wait</p>");
                $("#save_device").addClass("disabled");

                if($("#save_device").attr("data")=="edit"){
                    var result = readFormsAndAdd('edit');
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

                    var result = readFormsAndAdd('save');
                    result.then((res) => {
                        $("#deviceModal").modal('hide');
                        if(parseInt(res)==1) {
                            DataTable.ajax.reload();
                            js_success("A Device Has Been Attached To Your Account");
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


            $(document).on("click",".link",function () {
                let id = $(this).attr('id');
                $("#save_profile").attr("data-id",id);
                $.get(`{{url('admin/'.request()->segment(2).'/profile/')}}/${id}`,function (data) {
                    if(data.redirected_url!==`{{route('pro',auth()->user()->id)}}`){
                        $("[name='profile_url']").val(data.redirected_url);
                    }else{
                        $("[name='profile_url']").val('');
                    }
                });
                $("#profileModal").modal('show');
            });

            $("#profileForm").submit(function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    }
                });
                let id = $("#save_profile").attr('data-id');
                $.ajax({
                    type: 'POST',
                    url: `{{url('admin/'.request()->segment(2).'/profile/')}}/${id}`,
                    data:{'profile_url':$("[name='profile_url']").val()},
                    success:function (data) {
                        console.log(data);
                        $("#profileModal").modal('hide');
                        DataTable.ajax.reload();
                        js_success("Profile Linked Successfully");
                    },
                    error:function (err) {
                        console.log(err);
                    }
                });
            });

            $("#close_profile").click(function () {
                $("#profileModal").modal('hide');
            });


            $('#deviceModal').on('hidden.bs.modal', function () {
                $("#profileForm").trigger('reset');
            });


            $("#close").on("click",function () {
                $(':input','#deviceForm') .not(':button, :submit, :reset, :hidden') .val('')
                    .removeAttr('checked') .removeAttr('selected');
                $("#deviceModal").modal('hide');
            });

        {{--    //EMPlOYEE Modal JS End's--}}





        {{--    // Selecting all Checkboxes--}}
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

        {{--    //Delete Selected Records--}}
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
