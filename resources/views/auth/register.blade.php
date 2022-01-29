@php
    $title = "Sign Up";
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
                <h1 class="s-Header">Sign Up</h1>
                <p class="s-sub">
                    into a new account to get started
                </p>
            </div>

            <div class="inputWrap">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="input-">
                        <input
                            type="text"
                            name="name"
                            id="signin-inputs"
                            placeholder="Full Name"
                            class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                        />

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-">
                        <input
                            type="email"
                            name="email"
                            id="signin-inputs"
                            placeholder="Email Address"
                            class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
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
                            class="@error('password') is-invalid @enderror" required
                        />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-">
                        <input
                            type="password"
                            name="password_confirmation"
                            id="signin-inputs"
                            placeholder="Confirm Password"
                            required autocomplete="new-password"
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
