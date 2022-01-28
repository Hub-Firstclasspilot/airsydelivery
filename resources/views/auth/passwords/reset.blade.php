@php
    $title = "Reset Password";
@endphp

@extends('layouts.front')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                    {{ __('Reset Password') }}
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
                <h1 class="s-Header">{{ __('Reset Password') }}</h1>
            </div>

            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                
                <input type="hidden" name="token" value="{{ $token }}">
                
                <div class="inputWrap">
                    <div class="input-">
                        <input
                            type="email"
                            name="email"
                            value="{{ $email ?? old('email') }}"
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
                    <button type="submit" class="link-nav-button-m" style="cursor: pointer;">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
