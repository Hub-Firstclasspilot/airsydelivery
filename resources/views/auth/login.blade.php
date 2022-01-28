@php
    $title = "Login";
@endphp

@extends('layouts.front')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="SignManger">
    <div class="S-box" id="sign-in">
        <div class="s-wrap">
            <div class="s-top">
                <img
                    src='{{ asset('images/Logo.png') }}'
                    alt="Company Logo"
                    class="signlogo"
                />
                <a href='{{ route('index') }}' class="back-sign">
                    <span
                        class="iconify-inline"
                        data-icon="uil:arrow-left"
                    ></span>
                </a>
            </div>

            <div class="S-title-wrap">
                <h1 class="s-Header">Sign in</h1>
                <p class="s-sub">
                    into your account to get started
                </p>
            </div>

            <div class="inputWrap">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-">
                        <input
                            type="email"
                            name=""
                            id="signin-inputs"
                            placeholder="Email Address"
                        />
                    </div>
                    <div class="input-">
                        <input
                            type="password"
                            name=""
                            id="signin-inputs"
                            placeholder="Password"
                        />
                    </div>
                    <p class="else-sign" style="color: #000;">
                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    </p>
            </div>

            <div class="s-bottom">
                <div class="button-signin-menu">
                    <button type="submit" class="link-nav-button-m" style="cursor: pointer;">
                        Sign In
                    </button>
                </div>
                <a href='{{ route('register') }}'
                    class="else-sign"
                    style= "color: black"
                >
                    Are you new
                    <span class="blue-mainHeader">Sign up</span> to
                    get started
                </a>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
