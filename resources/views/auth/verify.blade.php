@extends('layouts.front')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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
                <h1 class="s-Header">{{ __('Verify Your Email Address') }}</h1>
            </div>
            
            <div class="S-title-wrap" style="margin: 0 1.5rem">
                <p class="s-sub">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                </p>
            </div>

            <form action="{{ route('verification.resend') }}" method="POST">
                @csrf
                <div class="inputWrap">
                    <div class="input-">
                        <input
                            type="email"
                            name="email"
                            id="signin-inputs"
                            placeholder="Email Address"
                        />
                    </div>
                
                </div>

            <div class="s-bottom">
                <div class="button-signin-menu">
                    <button type="submit" class="link-nav-button-m">
                        {{ __('click here to request another') }}
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
