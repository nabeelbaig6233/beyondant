@extends('admin.layout.webapp')
<style>
    .role-table {
        width: 48% !important;
        margin-bottom: 1rem !important;
        color: #212529 !important;
        margin: 0 auto !important;
    }
</style>
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
                                <table class="table role-table">
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
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateHome" <?php echo (in_array('updateHome', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewHome" <?php echo (in_array('viewHome', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                    </tr>

                                    <tr>
                                        <td>Reseller</td>
                                        <td> - </td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewReseller" <?php echo (in_array('viewReseller', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteReseller" <?php echo (in_array('deleteReseller', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Entrepreneur</td>
                                        <td> - </td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewEntrepreneur" <?php echo (in_array('viewEntrepreneur', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteEntrereneur" <?php echo (in_array('deleteEntrepreneur', $record))?'checked':'' ?>></td>
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
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createProfile" <?php echo (in_array('createProfile', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateProfile" <?php echo (in_array('updateProfile', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Company</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createCompany" <?php echo (in_array('createCompany', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCompany" <?php echo (in_array('updateCompany', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCompany" <?php echo (in_array('viewCompany', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCompany" <?php echo (in_array('deleteCompany', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Individual</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createIndividual" <?php echo (in_array('createIndividual', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateIndividual" <?php echo (in_array('updateIndividual', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewIndividual" <?php echo (in_array('viewIndividual', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteIndividual" <?php echo (in_array('deleteIndividual', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Devices</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createDevice" <?php echo (in_array('createDevice', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateDevice" <?php echo (in_array('updateDevice', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewDevice" <?php echo (in_array('viewDevice', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteDevice" <?php echo (in_array('deleteDevice', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Banner</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createBanner" <?php echo (in_array('createBanner', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewBanner" <?php echo (in_array('viewBanner', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Contacts</td>
                                        <td> - </td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewContact" <?php echo (in_array('viewContact', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteContact" <?php echo (in_array('deleteContact', $record))?'checked':'' ?>></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <a href="javascript:histroy.back()" class="btn btn-primary">Cancel</a>
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
