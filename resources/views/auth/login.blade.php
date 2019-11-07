@extends('mobile.layouts.app')

@section('content')
<div class="container align-self-center">
    <div class="row">
        <div class="col logo">
            <img src="{{ asset('asset_icon/sellsum.png') }}" class="logo-item">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7 col-xl-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row size-input">

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row size-input">

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col text-right">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Lupa Password?') }}
                        </a>
                    @endif
                </div>
                <div class="row mb-0 size-input">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-warning btn-reg-log">
                            {{ __('MASUK') }}
                        </button>
                    </div>
                </div>
                <div class="col text-center">
                    <p>Tidak punya akun ? <a href="{{ route('register') }}">Daftar</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
