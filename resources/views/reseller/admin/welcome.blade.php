@extends('admin.layout.webapp')
@section('page_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection
@section('content')

    <div class="right_col" role="main">
        <div class="row col-lg-12 mb-3" style="background: linear-gradient(to top right, #3366cc -8%, #66ff99 109%);border-radius: 10px;padding: 20px">
            <h4 class="text-white font-weight-bold">Analytic data refreshes every 48 hrs.</h4>
        </div>
        <!-- top tiles -->
        <div class="row" style="display: block;">
            <div class="tile_count">

                    <div class="col-md-3 col-sm-6  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                        <div><a class="count green" href="{{route('users')}}">{{$user??''}}</a></div>
                    </div>

                <div class="col-md-3 col-sm-6  tile_stats_count">

                    <div><a class="count green" href="{{route('profile')}}"></a></div>
                </div>


            </div>
        </div>

    </div>
@endsection
@section('page_js')

@endsection
