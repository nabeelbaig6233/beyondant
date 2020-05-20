@extends('admin.layout.webapp')
@section('content')
  <div class="right_col" role="main">
    <div class="row col-lg-12 mb-3" style="background: linear-gradient(to top right, #3366cc -8%, #66ff99 109%);border-radius: 10px;padding: 20px">
        <h4 class="text-white font-weight-bold">Analytic data refreshes every 48 hrs.</h4>
    </div>
      <!-- top tiles -->
    <div class="row" style="display: block;" >
      <div class="tile_count">
        @if (auth()->user()->role_id!==1)
            @else
        <div class="col-md-3 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
          <div><a class="count green" href="{{route('users')}}">{{$user??''}}</a></div>
        </div>
        @endif

          <div class="col-md-3 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total <?php if(auth()->user()->role_id===5){echo "Employees";} elseif(auth()->user()->role_id===7){echo "Devices";} else{echo "Profiles";}?></span>
          <div><a class="count green" href="{{route('profile')}}">{{$employees??$profile??$devices??''}}</a></div>
        </div>

{{--            Graph And Downloads--}}
          @if(auth()->check())
                @if(auth()->user()->role_id===1||auth()->user()->subscription_status===1)
                    <div class="col-md-3 col-sm-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-eye"></i> Total Profile Views</span>
                        <div><a class="count green" id="total_views" href="{{action('admin\DashboardController@index')}}">0</a></div>
                    </div>
                    <div class="col-md-3 col-sm-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-download"></i> Total Contact Downloads</span>
                        <div><a class="count green" id="total_downloads" href="{{action('admin\DashboardController@index')}}">{{$downloads}}</a></div>
                    </div>

                @endif
          @endif

      </div>
    </div>
      @if(auth()->check())
          @if(auth()->user()->role_id===1||auth()->user()->subscription_status===1)
                  <div class="container row">
                      <div class="col-10 offset-1 p-3 pt-5">
                          <div class="text-center">
                              <div class="spinner-border text-danger" role="status" id="loading_graph">
                                  <span class="sr-only">Loading...</span>
                              </div>
                          </div>

                          <canvas id="analytics_chart" width="400" height="140"></canvas>
                      </div>
                  </div>
          @endif
      @endif
  {{--       End     Graph And Downloads--}}
    <!-- /top tiles -->
  </div>
@endsection
@section('page_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script>
        $(document).ready(function () {
            var chart=new Chart($("#analytics_chart"),{
                type:'line',
                data:{
                    labels:[],
                    datasets:[{
                        label:'Page Views',
                        data:[],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        pointBorderColor:'rgba(255, 99, 132, 0.7)',
                        pointHoverBackgroundColor:'rgba(255, 99, 132, 0.4)',
                        pointHoverRadius:10,
                        borderWidth: 6,
                    }]},
                    options:{
                        scales: {
                            xAxes: [{
                                type: 'time',
                                time: {
                                    unit: 'week'
                                }
                            }]
                        }
                    }

            });
            $.get('{{route('google-analytics',auth()->user()->id)}}',function (data) {
                var data=JSON.parse(data);
                var labels=[];
                var values=[];
                var total=0;
                data.forEach((item)=>{
                    var views=parseInt(item[0]);
                    labels.push(new Date(item[1]));
                    values.push(views);
                    total+=views;
                });

                chart.data.labels=labels;
                chart.data.datasets[0].data=values;
                chart.options.scales.yAxes[0].ticks.fontSize = 12 ;
                chart.options.scales.xAxes[0].time.unit=data.length<15?'day':'week';
                $("#loading_graph").css({display:'none'});
                $("#total_views").text(total);
                chart.update();
                }).catch(function (error) {
                console.log(error);
            });


        })
    </script>
@endsection
