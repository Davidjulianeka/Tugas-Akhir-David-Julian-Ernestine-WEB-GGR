@extends('auth.layouts.app')

@section('content')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{asset('img/login.png')}}'); background-size: cover; background-position: top center;">
    <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card card-login card-hidden">
              <div class="card-header card-header-success text-center">
                <img src="{{asset('img/logo2.png')}}" alt="logo.png" width="100" >
              </div>
              <div class="card-body ">
                <h5 class="card-description text-center">Login to your Account</h5>
                <span class="bmd-form-group">
                  <div class="input-group  @error('email') has-danger @enderror">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">email</i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required autocomplete="email" autofocus>
                  </div>
                </span>
                <span class="bmd-form-group">
                  <div class="input-group  @error('password') has-danger @enderror">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="current-password">
                  </div>
                </span>
              </div>
              <div class="card-footer justify-content-center">
                <button type="submit"  class="btn btn-success mt-4">
                  {{ __('Login') }}
              </button>
              </div>
              <div class="text-center m-3">
                Don't have an account? <a class="text-success" href="{{ route('register') }}"> Signup</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="copyright">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com/" target="_blank">GGR</a>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection
