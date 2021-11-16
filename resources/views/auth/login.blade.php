@extends('layouts.login_temp.header')
@section('content')
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(Login_temp/images/bg-01.jpg)">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100" for="username" >{{ __('Username') }}</span>
                        <input class="input100 @error('username') is-invalid @enderror" id="username" type="text" name="username" value="{{ old('username') }}" placeholder="Enter username" required autocomplete="username" autofocus>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-18">
                        <span class="label-input100" for="password">{{ __('Password') }}</span>
                        <input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password"  placeholder="Enter password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>

                    </div>
                </form>
                <div class="container">
                    <div class="flex-sb-m w-full p-b-20">
                        <a href="{{url('/')}}">กลับหน้าหลัก</a> <br>
                        <a href="{{route('register')}}">สมัครสมาชิก</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
