@php
    $title = "Sign Up";
@endphp

@extends('layouts.front')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
                <h1 class="s-Header">Sign Up</h1>
                <p class="s-sub">
                    into a new account to get started
                </p>
            </div>

            <div class="inputWrap">
                <form action="{{ route('register') }}" method="POST">
                    <div class="input-">
                        <input
                            type="text"
                            name="name"
                            id="signin-inputs"
                            placeholder="Full Name"
                        />
                    </div>
                    <div class="input-">
                        <input
                            type="email"
                            name="email"
                            id="signin-inputs"
                            placeholder="Email Address"
                        />
                    </div>
                    <div class="input-">
                        <input
                            type="password"
                            name="password"
                            id="signin-inputs"
                            placeholder="Password"
                        />
                    </div>
                    <div class="input-">
                        <input
                            type="password"
                            name="password_confirmation"
                            id="signin-inputs"
                            placeholder="Confirm Password"
                        />
                    </div>
                
            </div>

            <div class="s-bottom">
                <div class="button-signin-menu">
                    <button type="submit" class="link-nav-button-m">
                        Sign Up
                    </button>
                </div>
                <a href='{{ route('login') }}'
                    class="else-sign"
                    style= "color: black"
                >
                    Already have an account?
                    <span class="blue-mainHeader">Sign in</span>
                </a>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
