@extends('layouts.app')
@section('content')
    <div class="content">
        <a class="navbar-brand" href="javascript:;">Profile Information<div class="ripple-container"></div></a>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (Session::has('message'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif

                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ Session::get('error') }}
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                    @endif
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-4 mt-4">
                            <span>Update your account's profile information and email address.<br><br> When You change your
                                email ,you need to verify
                                your email else the account will be blocked</span>
                        </div>

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">mail_outline</i>
                                    </div>
                                    <h4 class="card-title">Profile</h4>
                                </div>
                                <div class="card-body ">
                                    {!! Form::model($user, [
                                        'method' => 'PATCH',
                                        'action' => ['App\Http\Controllers\Auth\ProfileController@update', $user->uid],
                                    ]) !!}
                                    {!! Form::open() !!}
                                    <div class="form-group bmd-form-group">
                                        {!! Form::label('displayName', 'Name', ['class' => 'bmd-label-floating']) !!}
                                        {!! Form::text('displayName', null, ['class' => 'form-control', 'id' => 'displayName']) !!}

                                        {{-- <label for="displayName" class="bmd-label-floating">Display Name</label>
                                        <input type="text" class="form-control" id="displayName"> --}}
                                    </div>
                                    <div class="form-group bmd-form-group">

                                        {!! Form::label('email', 'Email ', ['class' => 'bmd-label-floating']) !!}
                                        {!! Form::email('email', null, ['class' => ' form-control']) !!}
                                        {{-- 
                                        <label for="examplePass" class="bmd-label-floating">Password</label>
                                        <input type="password" class="form-control" id="examplePass"> --}}
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    {!! Form::submit('Save', ['class' => 'btn btn-fill btn-rose']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>

                    </div>
                    <div class="border-bottom border-grey"></div>

                    <div class="row justify-content-center pt-5">
                        <div class="col-lg-4 mt-4">
                            <h4>Update Password</code></h5>
                                <span class="text-justify" style="padding-top:-3px;">Ensure your account is using a long,
                                    random password to stay secure.</span>
                        </div>

                        <div class="col-lg-8">

                            <div class="card">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">password</i>
                                    </div>
                                    <h4 class="card-title">Password</h4>
                                </div>
                                <div class="card-body ">
                                    {!! Form::model($user, [
                                        'method' => 'PATCH',
                                        'action' => ['App\Http\Controllers\Auth\ProfileController@update', $user->uid],
                                    ]) !!}
                                    {!! Form::open() !!}
                                    <div class="form-group bmd-form-group">

                                        {!! Form::label('new_password', 'New Password:', ['class' => 'bmd-label-floating']) !!}
                                        {!! Form::password('new_password', ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group bmd-form-group">
                                        {!! Form::label('new_confirm_password', 'Confirm Password:', ['class' => 'bmd-label-floating']) !!}
                                        {!! Form::password('new_confirm_password', ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    {!! Form::submit('Save', ['class' => 'btn btn-rose']) !!}
                                </div>
                                {!! Form::close() !!}
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
