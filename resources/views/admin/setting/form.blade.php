@extends('admin.layout.webapp')
@section('content')
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

                            <form class="form-horizontal form-label-left" method="POST" action="{{route('setting.edit')}}" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Site Title <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="title" class="form-control" name="title" value="{{ !empty($record->title)?$record->title:'' }}" placeholder="Site Title" required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Site Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="email" class="form-control" name="email" value="{{ !empty($record->email)?$record->email:'' }}" placeholder="Site Email" required="required" autofocus type="email" autocomplete="email">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone">Site Phone <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="phone" class="form-control" name="phone" value="{{ !empty($record->phone)?$record->phone:'' }}" placeholder="Site Phone" required="required" autofocus type="number" data-validate-length-range="10,15">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="fax">Site Fax <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="fax" class="form-control" name="fax" value="{{ !empty($record->fax)?$record->fax:'' }}" placeholder="Site Fax" required="required" autofocus type="number" data-validate-length-range="10,15">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="address" class="form-control" id="address" rows="3" placeholder="Address" required="required">{{ !empty($record->address)?$record->address:'' }}</textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="facebook">Facebook <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="facebook" class="form-control" name="facebook" value="{{ !empty($record->facebook)?$record->facebook:'' }}" placeholder="Facebook" required="required" autofocus type="url">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="twitter">Twitter <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="twitter" class="form-control" name="twitter" value="{{ !empty($record->twitter)?$record->twitter:'' }}" placeholder="Twitter" required="required" autofocus type="url">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="instagram">Instagram <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="instagram" class="form-control" name="instagram" value="{{ !empty($record->instagram)?$record->instagram:'' }}" placeholder="Instagram" required="required" autofocus type="url">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo">Logo <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->logo)?$record->logo:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="logo" name="logo" accept=".jpg,.png">
                                                    <input type="text" id="logo" name="logo" value="{{ !empty($record->logo) ? $record->logo : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="favico">Favico <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->favico)?$record->favico:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="favico" name="favico" accept=".jpg,.png">
                                                    <input type="text" id="favico" name="favico" value="{{ !empty($record->logo) ? $record->logo : '' }}" hidden="">
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
    <script>
        // Slug
        function mySlug() {
            let slug = document.getElementById('name').value;
            document.getElementById('slug').value = slug.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
        }
    </script>
@endsection
