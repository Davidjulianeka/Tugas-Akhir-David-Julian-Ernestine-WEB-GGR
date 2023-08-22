@extends('layouts.app')
@section('content')
    <div class="content">
        <a class="navbar-brand" href="javascript:;">Dashboard<div class="ripple-container"></div></a>
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h3>Welcome  {{ Auth::user()->displayName }}, have a nice day !</h3>
              </div>
                <div class="col-md-4">
                    <div class="card card">
                        <div class="card-header card-header-success" data-header-animation="true">
                            <h5><i class="material-icons">weather cloudy</i> Jakarta Indonesia</h5>
                        </div>
                        <div class="card-body">
                            <a class="weatherwidget-io" href="https://forecast7.com/en/n6d21106d85/jakarta/"
                                data-label_1="JAKARTA" data-label_2="WEATHER" data-font="Roboto" data-icons="Climacons"
                                data-theme="blue-mountains">JAKARTA WEATHER</a>
                            <script>
                                ! function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = 'https://weatherwidget.io/js/widget.min.js';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, 'script', 'weatherwidget-io-js');
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-chart">
                        <div class="card-header card-header-rose" data-header-animation="true">
                            <h5> <i class="material-icons">access_time</i> Farm, Hidroponic Daily Usage</h5>
                        </div>
                        <div class="card-body">
                            <div class="ct-chart" id="dailySalesChart"></div>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> updated 1 Hour ago
                            </div>
                        </div>
                    </div>
                </div>
                {{--
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-info" data-header-animation="true">
                    <div class="ct-chart" id="completedTasksChart"></div>
                  </div>
                  <div class="card-body">
                    <div class="card-actions">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                        <i class="material-icons">refresh</i>
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                        <i class="material-icons">edit</i>
                      </button>
                    </div>
                    <h4 class="card-title">Completed Tasks</h4>
                    <p class="card-category">Last Campaign Performance</p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> campaign sent 2 days ago
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
            {{-- <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">weekend</i>
                    </div>
                    <p class="card-category">Bookings</p>
                    <h3 class="card-title">184</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons text-danger">warning</i>
                      <a href="#pablo">Get More Space...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">equalizer</i>
                    </div>
                    <p class="card-category">Website Visits</p>
                    <h3 class="card-title">75.521</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">local_offer</i> Tracked from Google Analytics
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Revenue</p>
                    <h3 class="card-title">$34,245</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Followers</p>
                    <h3 class="card-title">+245</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">update</i> Just Updated
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}

        </div>
    </div>
@endsection

@section('js')
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('') }}js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            initDashboardPageCharts();
        });


        function initDashboardPageCharts() {

            var val = {{ $value }}

            console.log(val);

            if ($('#dailySalesChart').length != 0 || $('#completedTasksChart').length != 0 || $(
                    '#websiteViewsChart').length != 0) {
                /* ----------==========     Daily Sales Chart initialization    ==========---------- */

                dataDailySalesChart = {
                    labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                    series: [
                        val
                    ]
                };

                optionsDailySalesChart = {
                    lineSmooth: Chartist.Interpolation.cardinal({
                        tension: 0
                    }),
                    low: 0,
                    high: 100, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                    chartPadding: {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0
                    },
                }

                var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart,
                    optionsDailySalesChart);

                md.startAnimationForLineChart(dailySalesChart);

            }
        }
    </script>
@endsection
