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
                                        <td>Category</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createCategory" <?php echo (in_array('createCategory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCategory" <?php echo (in_array('updateCategory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCategory" <?php echo (in_array('viewCategory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCategory" <?php echo (in_array('deleteCategory', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Sub Category</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createSubCategory" <?php echo (in_array('createSubCategory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSubCategory" <?php echo (in_array('updateSubCategory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewSubCategory" <?php echo (in_array('viewSubCategory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteSubCategory" <?php echo (in_array('deleteSubCategory', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Attribute</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createAttribute" <?php echo (in_array('createAttribute', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateAttribute" <?php echo (in_array('updateAttribute', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewAttribute" <?php echo (in_array('viewAttribute', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteAttribute" <?php echo (in_array('deleteAttribute', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Variant</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createVariant" <?php echo (in_array('createVariant', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateVariant" <?php echo (in_array('updateVariant', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewVariant" <?php echo (in_array('viewVariant', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteVariant" <?php echo (in_array('deleteVariant', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Products</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createProduct" <?php echo (in_array('createProduct', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateProduct" <?php echo (in_array('updateProduct', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProduct" <?php echo (in_array('viewProduct', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteProduct" <?php echo (in_array('deleteProduct', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Product Variants</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createProductVariant" <?php echo (in_array('createProductVariant', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateProductVariant" <?php echo (in_array('updateProductVariant', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProductVariant" <?php echo (in_array('viewProductVariant', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteProductVariant" <?php echo (in_array('deleteProductVariant', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Inventory</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createInventory" <?php echo (in_array('createInventory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateInventory" <?php echo (in_array('updateInventory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewInventory" <?php echo (in_array('viewInventory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteInventory" <?php echo (in_array('deleteInventory', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Currency</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createCurrency" <?php echo (in_array('createCurrency', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCurrency" <?php echo (in_array('updateCurrency', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCurrency" <?php echo (in_array('viewCurrency', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCurrency" <?php echo (in_array('deleteCurrency', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Home Page</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createHome" <?php echo (in_array('createHome', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateHome" <?php echo (in_array('updateHome', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewHome" <?php echo (in_array('viewHome', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteHome" <?php echo (in_array('deleteHome', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Store Location</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createLocation" <?php echo (in_array('createLocation', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateLocation" <?php echo (in_array('updateLocation', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewLocation" <?php echo (in_array('viewLocation', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteLocation" <?php echo (in_array('deleteLocation', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Site Content</td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateContent" <?php echo (in_array('updateContent', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Orders</td>
                                        <td> - </td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewOrder" <?php echo (in_array('viewOrder', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing</td>
                                        <td> - </td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewMarket" <?php echo (in_array('viewMarket', $record))?'checked':'' ?>></td>
                                        <td> - </td>
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
