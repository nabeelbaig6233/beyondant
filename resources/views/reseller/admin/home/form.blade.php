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

                            <form class="form-horizontal form-label-left" method="POST" action="{{route('home.edit')}}" enctype="multipart/form-data" novalidate>
                                @csrf
                                <h2 style="text-align: center">Banner Section</h2>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="heading1">{{ucwords(str_replace('_',' ','heading1'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="heading1" class="form-control" name="heading1" value="{{ !empty($record->heading1)?$record->heading1:'' }}" placeholder="{{ucwords(str_replace('_',' ','heading1'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="text1">{{ucwords(str_replace('_',' ','text1'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="text1" class="form-control" id="text1" rows="3" placeholder="{{ucwords(str_replace('_',' ','text1'))}}" required="required">{{ !empty($record->text1)?$record->text1:'' }}</textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="iframe">{{ucwords(str_replace('_',' ','iframe'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="url" name="iframe" class="form-control" id="iframe" placeholder="{{ucwords(str_replace('_',' ','iframe'))}}" value="{{ !empty($record->iframe)?$record->iframe:'' }}" required="required">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="heading2">{{ucwords(str_replace('_',' ','heading2'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="heading2" class="form-control" name="heading2" value="{{ !empty($record->heading2)?$record->heading2:'' }}" placeholder="{{ucwords(str_replace('_',' ','heading2'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="text2">{{ucwords(str_replace('_',' ','text2'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="text2" class="form-control" id="text2" rows="3" placeholder="{{ucwords(str_replace('_',' ','text2'))}}" required="required">{{ !empty($record->text2)?$record->text2:'' }}</textarea>
                                    </div>
                                </div>

                                <h2 style="text-align: center">Grid Section</h2>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_heading1">{{ucwords(str_replace('_',' ','section_heading1'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="section_heading1" class="form-control" name="section_heading1" value="{{ !empty($record->section_heading1)?$record->section_heading1:'' }}" placeholder="{{ucwords(str_replace('_',' ','section_heading1'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_text1">{{ucwords(str_replace('_',' ','section_text1'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="section_text1" class="form-control" id="section_text1" rows="3" placeholder="{{ucwords(str_replace('_',' ','section_text1'))}}" required="required">{{ !empty($record->section_text1)?$record->section_text1:'' }}</textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_heading2">{{ucwords(str_replace('_',' ','section_heading2'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="section_heading2" class="form-control" name="section_heading2" value="{{ !empty($record->section_heading2)?$record->section_heading2:'' }}" placeholder="{{ucwords(str_replace('_',' ','section_heading2'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_text2">{{ucwords(str_replace('_',' ','section_text2'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="section_text2" class="form-control" id="section_text2" rows="3" placeholder="{{ucwords(str_replace('_',' ','section_text2'))}}" required="required">{{ !empty($record->section_text2)?$record->section_text2:'' }}</textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_heading3">{{ucwords(str_replace('_',' ','section_heading3'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="section_heading3" class="form-control" name="section_heading3" value="{{ !empty($record->section_heading3)?$record->section_heading3:'' }}" placeholder="{{ucwords(str_replace('_',' ','section_heading3'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_text3">{{ucwords(str_replace('_',' ','section_text3'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="section_text3" class="form-control" id="section_text3" rows="3" placeholder="{{ucwords(str_replace('_',' ','section_text3'))}}" required="required">{{ !empty($record->section_text3)?$record->section_text3:'' }}</textarea>
                                    </div>
                                </div>

                                <h2 style="text-align: center">Our Products</h2>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_heading4">{{ucwords(str_replace('_',' ','section_heading4'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="section_heading4" class="form-control" name="section_heading4" value="{{ !empty($record->section_heading4)?$record->section_heading4:'' }}" placeholder="{{ucwords(str_replace('_',' ','section_heading4'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_text4">{{ucwords(str_replace('_',' ','section_text4'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="section_text4" class="form-control" id="section_text4" rows="3" placeholder="{{ucwords(str_replace('_',' ','section_text4'))}}" required="required">{{ !empty($record->section_text4)?$record->section_text4:'' }}</textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_image4">Product Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->section_image4)?$record->section_image4:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="section_image4" name="section_image4" accept=".jpg,.png">
                                                    <input type="text" id="section_image4" name="section_image4" value="{{ !empty($record->section_image4) ? $record->section_image4 : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_heading5">{{ucwords(str_replace('_',' ','section_heading5'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="section_heading5" class="form-control" name="section_heading5" value="{{ !empty($record->section_heading5)?$record->section_heading5:'' }}" placeholder="{{ucwords(str_replace('_',' ','section_heading5'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_text5">{{ucwords(str_replace('_',' ','section_text5'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="section_text5" class="form-control" id="section_text5" rows="3" placeholder="{{ucwords(str_replace('_',' ','section_text5'))}}" required="required">{{ !empty($record->section_text5)?$record->section_text5:'' }}</textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_image5">Section Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->section_image5)?$record->section_image5:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="section_image5" name="section_image5" accept=".jpg,.png">
                                                    <input type="text" id="section_image5" name="section_image5" value="{{ !empty($record->section_image5) ? $record->section_image5 : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
l
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <a href="{{ url('/admin') }}" class="btn btn-primary">Cancel</a>
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
