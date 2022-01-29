@php
    $title = "Login";
@endphp

@extends('layouts.front')

@section('content')
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
                            name="email"
                            id="signin-inputs"
                            placeholder="Email Address"
                            class="@error('email') is-invalid @enderror"
                        />
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-">
                        <input
                            type="password"
                            name="password"
                            id="signin-inputs"
                            placeholder="Password"
                            class="@error('password') is-invalid @enderror"
                        />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
