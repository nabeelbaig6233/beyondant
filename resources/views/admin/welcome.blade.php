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
                @if (auth()->user()->role_id!==1)
                @else
                    <div class="col-md-3 col-sm-6  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                        <div><a class="count green" href="{{route('users')}}">{{$user??''}}</a></div>
                    </div>
                @endif

                <div class="col-md-3 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total <?php if (auth()->user()->role_id === 5) {
                            echo "Employees";
                        } elseif (auth()->user()->role_id === 7) {
                            echo "Devices";
                        } else {
                            echo "Profiles";
                        }?></span>
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
{{--                        <div class="text-center">--}}
{{--                            <div class="spinner-border text-danger" role="status" id="loading_graph">--}}
{{--                                <span class="sr-only">Loading...</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-3">
                                        <button class="btn btn-block btn-danger" id="select_date" style="background:linear-gradient(90deg, rgba(162,18,5,0.9640231092436975) 22%, rgba(121,9,75,1) 94%);border-radius: 10px;padding: 10px;border: none;">Select Date</button>
                                    </div>
                                    <div class="col-8" id="start_end_date" style="display: none">
                                        <div class="row p-3">
                                            <h4 class="text-dark font-weight-bold ml-3 mr-2">Start Date: </h4><span class="text-danger font-weight-bold ml-2"></span>
                                            <h4 class="text-dark font-weight-bold ml-3 mr-2">End Date: </h4><span class="text-danger font-weight-bold ml-2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="u-card-body">
                                <div id="columnchart_values" style="width: 400px; height: 300px;"></div>
                                {{--                                <canvas id="analytics_chart" width="400" height="140"></canvas>--}}
                            </div>
                        </div>
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        $(document).ready(function () {
            //Chart Initialization
            var chart = new Chart($("#analytics_chart"), {
                type: 'line',
                data: {
                    labels: [],
                    datasets: [{
                        label: 'Page Views',
                        data: [],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        pointBorderColor: 'rgba(255, 99, 132, 0.7)',
                        pointHoverBackgroundColor: 'rgba(255, 99, 132, 0.4)',
                        pointHoverRadius: 10,
                        borderWidth: 6,
                    }]
                },
                options: {
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
            //Chart Initialization

            //Chart TimeSeries Formatter
            const timeSFormatter = (dataLength) => {
                if (dataLength < 15) {
                    return 'day';
                } else if (dataLength > 55) {
                    return 'month';
                } else {
                    return 'week';
                }
            };
            //Chart TimeSeries Formatter

            //Updating Chart

            const chartUpdate = (data) => {
                $("#loading_graph").css({display: 'block'});
                var data = JSON.parse(data);
                var labels = [];
                var values = [];
                var total = 0;
                data.forEach((item) => {
                    //  console.log("views : "+ item[0] + " Date :"+ item[1]  );
                    var views = parseInt(item[0]);
                    labels.push(new Date(item[1]));
                    values.push(views);
                    total += views;
                });
                chart.data.labels = labels;
                chart.data.datasets[0].data = values;
                chart.options.scales.yAxes[0].ticks.fontSize = 12;
                chart.options.scales.xAxes[0].time.unit = timeSFormatter(data.length);
                $("#loading_graph").css({display: 'none'});
                chart.update();
                return total;
            }

            //Updating Chart

            //Getting Initial Data
            $.get('{{route('google-analytics',auth()->user()->id)}}',function (data) {
                // var total=chartUpdate(data);
                // $("#total_views").text(total);
                drawChart(data);
            }).catch(function (error) {
                console.log(error);
            });
            //Getting Initial Data

            //Getting FIlter Data
            async function filterAnalytics(startDate, endDate) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': `{{csrf_token()}}`
                    }
                });

                const result = await $.ajax({
                    url: `{{route('google-filter-analytics')}}`,
                    type: 'POST',
                    data: {'startDate': startDate, 'endDate': endDate}
                });
                return result;
            }

            //Getting FIlter Data

            //DatePicker Starts
            $('#select_date').daterangepicker({
                maxDate: moment().subtract(2, 'days'),
                minDate: moment().subtract(4, 'months').subtract(2, 'days')
            }, function (start, end) {
                var display_format = 'MM/DD/YYYY';
                var query_format = 'YYYY-MM-DD';
                $("#start_end_date span:eq(0)").text(start.format(display_format));
                $("#start_end_date span:eq(1)").text(end.format(display_format));
                $("#start_end_date").css({display: 'block'});
                var getFA = filterAnalytics(start.format(query_format), end.format(query_format));
                getFA.then((data) => {
                    drawChart(data);

                }).catch((err) => {
                    console.log(err);
                });
            });
            //DatePicker Ends

            //using bar chart umer working this jaga
            google.charts.load("current", {packages: ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart(testing) {
                var d=[];
                var dat=  ["Element", "Views", {role: "style"}];
                d.push(dat);
                testing.forEach((item) => {
                   let colors=Math.floor(Math.random() * 1000) + 100;
                    var a = new Date(item[1]);
                    d.push([a.toLocaleString('default', { month: 'short' }) + "," + a.getDate(),item[0],"FF7"+colors]);

                });

                var data = google.visualization.arrayToDataTable(d);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                    {
                        calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation"
                    },
                    2]);

                var options = {
                    title: 'Page Views',
                    width: 730,
                    height: 400,
                    bar: {groupWidth: "95%"},
                    legend: {position: "none"},
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                chart.draw(view, options);
            }

        })
    </script>
@endsection
