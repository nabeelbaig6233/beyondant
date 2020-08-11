@extends('reseller.admin.layout.webapp')
@section('page_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endsection
@section('content')

    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: block;">
            <div class="tile_count">

                <div class="col-md-3 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Orders</span>
                    <div><a class="count green" href="">100</a></div>
                </div>

                <div class="col-md-3 col-sm-6  tile_stats_count">
                    <span class="count_top" disabled="disabled"><i class="fa fa-user"></i> Total Sales (Coming Soon)</span>
                    <div><a class="count green" disabled="disabled" >$100000</a></div>
                </div>

                <div class="col-md-3 col-sm-6  tile_stats_count">

                    <div><a class="count green" href=""></a></div>
                </div>


            </div>
        </div>

    </div>
@endsection
@section('page_js')

@endsection
