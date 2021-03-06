@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <div class="card">

        <div class="card-header pt-4 pb-4 text-center bg-success">
          <a href="index.html">
            <span><img src="static/img/logo.png" alt="" height="18"></span>
          </a>
        </div>

        <div class="card-body p-4">

          <div class="text-center w-75 m-auto">
            <h4 class="text-dark-50 text-center mt-0 font-weight-bold">登陆</h4>
            <p class="text-muted mb-4">输入您的电子邮件地址和密码进入论坛。</p>
          </div>

          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
              <label for="email">{{ __('E-Mail Address') }}</label>

              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              @if (Route::has('password.request'))
              <a class="text-muted float-right" href="{{ route('password.request') }}">
                <small>{{ __('Forgot Your Password?') }}</small>
              </a>
              @endif
              <label for="password">{{ __('Password') }}</label>


              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

            </div>

            <div class="form-group mb-3">

              <div class="custom-control custom-checkbox">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                  {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>

            </div>

            <div class="form-group mb-0 text-center">

              <button type="submit" class="btn btn-success">
                {{ __('Login') }}
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12 text-center">
            <p class="text-muted">还没有账号? <a href="{{ route('register') }}" class="text-muted ml-1"><b>立即注册</b></a></p>
        </div> <!-- end col -->
    </div>

    </div>
  </div>
</div>
@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/login.css') }}">
@stop
