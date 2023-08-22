@extends('layouts.app')
@section('content')
    <div class="content">
        <a class="navbar-brand" href="javascript:;">Contact Us<div class="ripple-container"></div></a>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card">
                        <h3 class="px-5">Contact Information</h3>
                        <hr>
                        <div class="row px-4">
                            <div class="col-md-1">
                                <h3> <i class="material-icons">phone</i></h3>
                            </div>
                            <div class="col-md-11">
                                <h3> {{ $contact['telp'] }}</h3>
                            </div>
                            <div class="col-md-1">
                                <h3> <i class="material-icons">mail</i></h3>
                            </div>
                            <div class="col-md-11">
                                <h3> {{ $contact['email'] }}</h3>
                            </div>
                            <div class="col-md-1">
                                <h3> <i class="material-icons">map</i></h3>
                            </div>
                            <div class="col-md-11">
                                <h3> {{ $contact['alamat'] }}</h3>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body ">
                            <h3 class="px-5">Send us A Message</h3>
                            <hr>
                            <form method="#" action="#">
                                <div class="form-group bmd-form-group">
                                    <label for="exampleEmail" class="bmd-label-floating">Name</label>
                                    <input type="email" class="form-control" id="exampleEmail">
                                </div>
                                <div class="form-group bmd-form-group">
                                    <label for="exampleEmail" class="bmd-label-floating">Email Address</label>
                                    <input type="email" class="form-control" id="exampleEmail">
                                </div>
                                <div class="form-group bmd-form-group">
                                    <label for="exampleEmail" class="bmd-label-floating">Subject</label>
                                    <input type="email" class="form-control" id="exampleEmail">
                                </div>
                                <div class="form-group bmd-form-group">
                                    <label for="examplePass" class="bmd-label-floating">Message</label>
                                    <textarea class="form-control" id="examplePass"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer ">
                            <button type="submit" class="btn btn-fill btn-rose">Submit<div class="ripple-container"></div>
                            </button>
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
@endsection
