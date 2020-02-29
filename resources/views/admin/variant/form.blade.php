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
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="attribute_id">Select Attribute <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="attribute_id" id="attribute_id" class="form-control @error('attribute_id') is-invalid @enderror" required="required">
                                            <option value="">Select Attribute</option>
                                            @if (!empty($attribute))
                                                @foreach($attribute as $att)
                                                    <option value="{{$att->id}}" {{(!empty($record->attribute_id) ? (($record->attribute_id == $att->id)?"selected":"") : "" )}}>{{$att->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Variant Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="name" class="form-control" name="name" value="{{ !empty($record->name)?$record->name:'' }}" placeholder="Variant Name" required="required" autofocus type="text">
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
@endsection
