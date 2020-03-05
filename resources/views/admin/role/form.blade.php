@extends('admin.layout.webapp')
@section('content')
    @php
        $action = url('admin/'.request()->segment(2).'/form/'.request()->segment(4));
        if (request()->segment(4) == 'edit' || request()->segment(4) == 'duplicate') {
            $action .= '/'.request()->segment(5);
        }
    @endphp
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>{{ !empty($title)?$title:'' }}</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ !empty($title)?$title:'' }}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form class="form-horizontal form-label-left" method="POST" action="{{ $action }}" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Role Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="name" class="form-control" name="name" value="{{ !empty($record->name)?$record->name:'' }}" placeholder="Role Name" required="required" autofocus type="text">
                                    </div>
                                </div>

                                <?php
                                if (isset($record->permission)) {
                                    $record = json_decode($record->permission) ?? [];
                                } else {
                                    $record = [];
                                }
                                ?>
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Create</th>
                                        <th>Update</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Users</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser" <?php echo (in_array('createUser', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser" <?php echo (in_array('updateUser', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser" <?php echo (in_array('viewUser', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser" <?php echo (in_array('deleteUser', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Roles</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createRole" <?php echo (in_array('createRole', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateRole" <?php echo (in_array('updateRole', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewRole" <?php echo (in_array('viewRole', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteRole" <?php echo (in_array('deleteRole', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Customers</td>
                                        <td> - </td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCustomer" <?php echo (in_array('viewCustomer', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCustomer" <?php echo (in_array('deleteCustomer', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>User Profile</td>
                                        <td> - </td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUserProfile" <?php echo (in_array('viewUserProfile', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUserProfile" <?php echo (in_array('deleteUserProfile', $record))?'checked':'' ?>></td>
                                    </tr>

                                    <tr>
                                        <td>Home Page</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createHome" <?php echo (in_array('createHome', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateHome" <?php echo (in_array('updateHome', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewHome" <?php echo (in_array('viewHome', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteHome" <?php echo (in_array('deleteHome', $record))?'checked':'' ?>></td>
                                    </tr>


                                    <tr>
                                        <td>Setting</td>
                                        <td>-</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting" <?php echo (in_array('updateSetting', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Profile</td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateProfile" <?php echo (in_array('updateProfile', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
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
