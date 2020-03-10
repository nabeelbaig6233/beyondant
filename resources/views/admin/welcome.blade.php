@extends('admin.layout.webapp')
@section('content')
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row" style="display: block;" >
      <div class="tile_count">
        <div class="col-md-6 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
          <div><a class="count green" href="{{route('users')}}">{{$user??''}}</a></div>
        </div>

        <div class="col-md-6 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Profiles</span>
          <div><a class="count green" href="{{route('profile')}}">{{$profile??''}}</a></div>
        </div>



      </div>
    </div>
    <!-- /top tiles -->
  </div>
@endsection
