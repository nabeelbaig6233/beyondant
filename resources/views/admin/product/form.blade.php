@extends('admin.layout.webapp')
@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/admin/summernote/dist/summernote-bs4.min.css') }}">
    <style>
        .prices {
            display: none;
        }
    </style>
@endsection
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
                                @php
                                    $id = Auth::user()->id;
                                    $role = \DB::table('roles')->select('roles.name')->whereIn('roles.id',function ($query) use ($id) {
                                            $query->select('users.role_id')->from('users')->where('users.id',$id);
                                        })->first()->name;
                                @endphp
                                @if ($role === "admin")
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="language_id">Select Language <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6">
                                            <select name="language_id" id="language_id" class="form-control @error('language_id') is-invalid @enderror" required="required">
                                                <option value="">Select Language</option>
                                                @if (!empty($language))
                                                    @foreach($language as $lang)
                                                        <option value="{{$lang->id}}" {{ (!empty($record->language_id)?(($record->language_id == $lang->id)?"selected":""):"")}}>{{$lang->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                @endif

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="category_id">Select Category <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required="required">
                                            <option value="">Select Category</option>
                                            @if (!empty($category))
                                                @foreach($category as $cat)
                                                    <option value="{{$cat->id}}" {{(!empty($record->category_id) ? (($record->category_id == $cat->id)?"selected":"") : "" )}}>{{$cat->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="sub_category_id">Select Sub Category <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="sub_category_id" id="sub_category_id" class="form-control @error('sub_category_id') is-invalid @enderror" required="required">
                                            <option value="">Select Sub Category</option>
                                            @if (request()->segment(4) == 'edit' || request()->segment(4) == 'duplicate')
                                                <option value="{{$record->sub_category_id ?? ''}}" selected>{{getSinglieField('sub_category',['id' => $record->sub_category_id], 'name')}}</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div id="attrVar">
                                    <?php if(request()->segment(4) == 'edit' || request()->segment(4) == 'duplicate'): ?>
                                        <style>
                                            .prices {
                                                display: block !important;
                                            }
                                        </style>
                                    <?php echo $variant; endif; ?>
                                </div>

                                <input type="hidden" id="slug" name="slug" value="{{ !empty($record->slug)?$record->slug:'' }}" data-validation="required">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Product Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="name" class="form-control" onkeyup="mySlug()" name="name" value="{{ !empty($record->name)?$record->name:'' }}" placeholder="Product Name" required="required" autofocus type="text">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="sku">Product SKU <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="sku" class="form-control" name="sku" value="{{ !empty($record->sku)?$record->sku:'' }}" placeholder="Product SKU" required="required" autofocus type="text">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Product Description <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="description" class="form-control summernote" name="description" required="required">{{ !empty($record->description)?$record->description:'' }}</textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="price_reg">Product Regular Price <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="price_reg" class="form-control" name="price_reg" value="{{ !empty($record->price_reg)?$record->price_reg:'' }}" placeholder="Product Regular Price" required="required" autofocus type="number">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="price_dis">Product Discount Price</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="price_dis" class="form-control" name="price_dis" value="{{ !empty($record->price_dis)?$record->price_dis:'' }}" placeholder="Product Regular Discount" autofocus type="number">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="price_dis_start">Product Discount Start</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="price_dis_start" class="form-control" name="price_dis_start" value="{{ !empty($record->price_dis_start)?$record->price_dis_start:'' }}" placeholder="Product Discount Start" autofocus type="date">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="price_dis_end">Product Discount End</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="price_dis_end" class="form-control" name="price_dis_end" value="{{ !empty($record->price_dis_end)?$record->price_dis_end:'' }}" placeholder="Product Discount End" autofocus type="date">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="price_status">Product Price Status<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="price_status" id="price_status" class="form-control" required="required">
                                            <option value="0" {{(!empty($record->price_status) ? (($record->price_status == "0")?"selected":"") : "" )}}>Disable</option>
                                            <option value="1" {{(!empty($record->price_status) ? (($record->price_status == "1")?"selected":"") : "" )}}>Enable</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="featured">Product Featured<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="featured" id="featured" class="form-control" required="required">
                                            <option value="0" {{(!empty($record->featured) ? (($record->featured == "0")?"selected":"") : "" )}}>Disable</option>
                                            <option value="1" {{(!empty($record->featured) ? (($record->featured == "1")?"selected":"") : "" )}}>Enable</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="status">Product Status<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="status" id="status" class="form-control" required="required">
                                            <option value="1" {{(!empty($record->status) ? (($record->status == "1")?"selected":"") : "" )}}>Enable</option>
                                            <option value="0" {{(!empty($record->status) ? (($record->status == "0")?"selected":"") : "" )}}>Disable</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Product Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->image)?$record->image:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="image" name="image" accept=".jpg,.png">
                                                    <input type="text" name="image" value="{{ !empty($record->image) ? $record->image : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="hover_image">Product Hover Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->hover_image)?$record->hover_image:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="hover_image" name="hover_image" accept=".jpg,.png">
                                                    <input type="text" name="hover_image" value="{{ !empty($record->hover_image) ? $record->hover_image : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="multi_image">Product Multi Images <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn multi-image-upload-main">
                                            <?php
                                                if (!empty($record->multi_image)):
                                                    $multi_image = json_decode($record->multi_image);
                                                    foreach ($multi_image as $mimage):
                                            ?>
                                            <div class="multi-image-upload">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                <img src="{{ asset($mimage??'assets/admin/images/placeholder.png') }}">
                                                <div class="file-btn">
                                                    <input type="text" id="multi_image" name="multi_image[]" value="{{ $mimage ?? '' }}" hidden="">
                                                </div>
                                            </div>
                                            <?php endforeach; endif; ?>
                                            <div class="multi-image-upload">
                                                <img src="{{asset('assets/admin/images/placeholder.png')}}">
                                                <div class="file-btn">
                                                    <input type="file" id="multi_image" name="multi_image[]" accept=".jpg,.png">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
    <script src="{{ asset('assets/admin/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.summernote').summernote();

            // Get Sub Categories
            let subCat = document.querySelector('#category_id');
            subCat.addEventListener('change', (event) => {
                let category_id = document.getElementById('category_id').value;
                if (category_id) {
                    $.ajax({
                        url: `{{route('subcat')}}`,
                        method: "get",
                        data: {category_id: category_id},
                        dataType: "json",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: (data) => {
                            let sub_category_id = '';
                            sub_category_id += `<option value="">Select Sub Category</option>`;
                            for (let scat of data) {
                                sub_category_id += `<option value="${scat.id}">${scat.name}</option>`;
                            }
                            $('#sub_category_id').html(sub_category_id);
                        }
                    })
                } else {
                    return false;
                }
            });

            // Get Attribute and Variants
            $(document).on('change', '#sub_category_id', function () {
                var sub_category_id = $('select[id=sub_category_id]').val();
                if (sub_category_id) {
                    $.ajax({
                        url: `{{url('admin/product/getattr/')}}/${sub_category_id}`,
                        method: "get",
                        dataType: "json",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            $('#attrVar').html(data);
                        }
                    })
                } else {
                    $('#attrVar').html('');
                }
            });

            $(document).on('click', '.variant', function () {
                var variantId = $(this).data('id');
                $(variantId).fadeToggle();
            });

        });

        // Slug
        function mySlug() {
            let slug = document.getElementById('name').value;
            document.getElementById('slug').value = slug.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        }
    </script>
@endsection
