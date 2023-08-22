@extends('layouts.app')
@section('content')
    <div class="content">
        <a class="navbar-brand" href="javascript:;">Plants<div class="ripple-container"></div></a>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-success">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">Plants:</span>
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active show" href="#profile" data-toggle="tab">
                                                <i class="material-icons">spa</i> Spinach
                                                <div class="ripple-container"></div>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#messages" data-toggle="tab">
                                                <i class="material-icons">spa</i> Pack Choi
                                                <div class="ripple-container"></div>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link show" href="#settings" data-toggle="tab">
                                                <i class="material-icons">spa</i> Lattuce
                                                <div class="ripple-container"></div>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="profile">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{asset('img/plant-1.jpg')}}" class="img-plant" >
                                        </div>
                                       <div class="col-4">
                                             <h3>Controller <i class="material-icons">input</i></h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h2>Heather</h2>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h1>{{$spinach['heather'] }} &#8451;</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Water Pump</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox" {{ $spinach['water_pump'] == true ? 'checked' : '' }} >
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Smart WIFI</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox" {{ $spinach['smart_wifi'] == true ? 'checked' : '' }}>
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Smart LED</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox" {{ $spinach['smart_led'] == true ? 'checked' : '' }}">
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Humidifier</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox"{{ $spinach['humidifier'] == true ? 'checked' : '' }}>
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                          <h3>Monitor <i class="material-icons">dashboard</i></h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-danger">
                                                                <div class="card-body">
                                                                <h3 class="card-category">INSIDE</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h2 class="card-title">{{$spinach['inside']}} &#8451;</h2>
                                                                <p class="card-description">
                                                                CELCIUS
                                                                </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-primary">
                                                                <div class="card-body">
                                                                <h3 class="card-category">Water Content</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h1 class="card-title">{{$spinach['water_content']}} %</h1>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-warning">
                                                                <div class="card-body">
                                                                <h3 class="card-category">Water PH</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h1 class="card-title">{{ $spinach['water_ph'] }}</h1>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-info">
                                                                <div class="card-body">
                                                                <h3 class="card-category">Co2</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h1 class="card-title">{{$spinach['co2']}} pm</h1>
                                                                <span class="badge badge-pill badge-success">Good</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{asset('img/plant-2.jpg')}}" class="img-plant" >
                                        </div>
                                       <div class="col-4">
                                             <h3>Controller <i class="material-icons">input</i></h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h2>Heather</h2>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h1>{{$pakchoi['heather'] }} &#8451;</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Water Pump</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox" {{ $pakchoi['water_pump'] == true ? 'checked' : '' }} >
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Smart WIFI</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox" {{ $pakchoi['smart_wifi'] == true ? 'checked' : '' }}>
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Smart LED</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox" {{ $pakchoi['smart_led'] == true ? 'checked' : '' }}">
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Humidifier</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox"{{ $pakchoi['himidifier'] == true ? 'checked' : '' }}>
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                          <h3>Monitor <i class="material-icons">dashboard</i></h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-danger">
                                                                <div class="card-body">
                                                                <h3 class="card-category">INSIDE</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h2 class="card-title">{{$pakchoi['inside']}} &#8451;</h2>
                                                                <p class="card-description">
                                                                CELCIUS
                                                                </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-primary">
                                                                <div class="card-body">
                                                                <h3 class="card-category">Water Content</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h1 class="card-title">{{$pakchoi['water_content']}} %</h1>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-warning">
                                                                <div class="card-body">
                                                                <h3 class="card-category">Water PH</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h1 class="card-title">{{ $pakchoi['water_ph'] }}</h1>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-info">
                                                                <div class="card-body">
                                                                <h3 class="card-category">Co2</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h1 class="card-title">{{$pakchoi['co2']}} pm</h1>
                                                                <span class="badge badge-pill badge-success">Good</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{asset('img/plant-3.jpg')}}" class="img-plant" >
                                        </div>
                                       <div class="col-4">
                                             <h3>Controller <i class="material-icons">input</i></h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h2>Heather</h2>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h1>{{$lattuce['heather'] }} &#8451;</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Water Pump</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox" {{ $lattuce['water_pump'] == true ? 'checked' : '' }} >
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Smart WIFI</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox" {{ $lattuce['smart_wifi'] == true ? 'checked' : '' }}>
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Smart LED</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox" {{ $lattuce['smart_led'] == true ? 'checked' : '' }}">
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h2>Humidifier</h2>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="togglebutton">
                                                                <label>
                                                                <input type="checkbox"{{ $lattuce['humidifier'] == true ? 'checked' : '' }}>
                                                                <span class="toggle"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                          <h3>Monitor <i class="material-icons">dashboard</i></h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-danger">
                                                                <div class="card-body">
                                                                <h3 class="card-category">INSIDE</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h2 class="card-title">{{$lattuce['inside']}} &#8451;</h2>
                                                                <p class="card-description">
                                                                CELCIUS
                                                                </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-primary">
                                                                <div class="card-body">
                                                                <h3 class="card-category">Water Content</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h1 class="card-title">{{$lattuce['water_content']}} %</h1>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-warning">
                                                                <div class="card-body">
                                                                <h3 class="card-category">Water PH</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h1 class="card-title">{{ $lattuce['water_ph'] }}</h1>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card card-pricing card-raised bg-info">
                                                                <div class="card-body">
                                                                <h3 class="card-category">Co2</h3>
                                                                {{-- <div class="card-icon icon-rose">
                                                                    <i class="material-icons">home</i>
                                                                </div> --}}
                                                                <h1 class="card-title">{{$lattuce['coa']}} pm</h1>
                                                                <span class="badge badge-pill badge-success">Good</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('') }}js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
@endsection
