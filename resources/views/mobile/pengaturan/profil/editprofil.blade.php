@extends('mobile.layouts.app_m')

@section('link_asal')
    <a href="#" class="list-group-item list-group-item-action bg-light">Beli</a>
    <a href="{{ route('menu_laporan') }}" class="list-group-item list-group-item-action bg-light">Laporan</a>
    <a href="{{ route('menu_manajemen') }}" class="list-group-item list-group-item-action bg-light">Manajemen</a>
    <a href="{{ route('menu_pengaturan') }}" class="list-group-item list-group-item-action bg-light">Pengaturan</a>
@endsection

@section('title-menu')
    Ubah Profil
@endsection

@section('content')
<div class="container py-41" style="margin:auto">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row size-input">

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $name }}" required autocomplete="name" autofocus placeholder="{{ __('Nama') }}">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row size-input">

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row size-input">

            <div class="col-md-6">
                <input id="notelp" type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ $notelp }}" required autocomplete="notelp" placeholder="{{ __('Nomer Telepon') }}">

                @error('notelp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row size-input">

            <div class="col-md-6">
                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" required placeholder="{{ __('Alamat') }}">{{ $alamat }}</textarea>
                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row size-input">

            <div class="col-md-6">
                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" placeholder="{{ __('Nomer Telepon') }}">

                @error('foto')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row size-input">

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row size-input">

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary btn-reg-log btn-warning">
                    {{ __('Ubah') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('link_javascript')
<script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/barcodes/JsBarcode.ean-upc.min.js" crossorigin="anonymous"></script>
@endsection