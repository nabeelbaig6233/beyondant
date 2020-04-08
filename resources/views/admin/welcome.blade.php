@extends('admin.layout.webapp')
@section('content')
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row" style="display: block;" >
      <div class="tile_count">
        @if (auth()->user()->role_id!==5)

        <div class="col-md-6 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
          <div><a class="count green" href="{{route('users')}}">{{$user??''}}</a></div>
        </div>
        @endif

          <div class="col-md-6 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total {{auth()->user()->role_id===5?"Employees":"Profiles"}}</span>
          <div><a class="count green" href="{{route('profile')}}">{{$employees??$profile??''}}</a></div>
        </div>



      </div>
    </div>
    <!-- /top tiles -->
  </div>
@endsection
