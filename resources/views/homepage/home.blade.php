@extends('homepage.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center header-prom">
        <div class="col align-middle headline">
            <h1>Bertransaksi hanya butuh <b>sekali klik</b> saja</h1>
            <p>
                Sellsum memudahkan anda dalam melakukan transaksi. Anda hanya perlu memfoto barcode 
                dan biarkan Sellsum mengurus lainnya.
            </p>
            <button type="button" class="btn btn-warning">Coba Gratis!!</button>
        </div>
        <div class="col headline">
            <img src="{{ asset('asset_icon/back.png') }}" class="header-foto">
        </div>
    </div>
    <div class="col text-center">
        <h4>Mengapa <b>SELLSUM</b> ?</h4>
    </div>
    <div class="row fitur">
        <div class="col justify-content-center text-center item-fitur">
            <img src="{{ asset('asset_icon/barcode.png') }}" class="item-fitur-gambar">
            <p>Pemakaian barcode untuk memudahkan dalam bertransaksi</p>
        </div>
        <div class="col justify-content-center text-center item-fitur">
            <img src="{{ asset('asset_icon/notes.png') }}" class="item-fitur-gambar">
            <p>Pemakaian barcode untuk memudahkan dalam bertransaksi</p>
        </div>
        <div class="col justify-content-center text-center item-fitur">
            <img src="{{ asset('asset_icon/settings.png') }}" class="item-fitur-gambar">
            <p>Pemakaian barcode untuk memudahkan dalam bertransaksi</p>
        </div>
    </div>
    <div class="col text-center">
            <h4>Bagaiman <b>SELLSUM</b> Bekerja ?</h4>
        </div>
        <div class="row fitur">
            <div class="col justify-content-center text-center item-fitur">
                <img src="{{ asset('asset_icon/barcode.png') }}" class="item-fitur-gambar">
                <p>Pemakaian barcode untuk memudahkan dalam bertransaksi</p>
            </div>
            <div class="col justify-content-center text-center item-fitur">
                <img src="{{ asset('asset_icon/notes.png') }}" class="item-fitur-gambar">
                <p>Pemakaian barcode untuk memudahkan dalam bertransaksi</p>
            </div>
            <div class="col justify-content-center text-center item-fitur">
                <img src="{{ asset('asset_icon/settings.png') }}" class="item-fitur-gambar">
                <p>Pemakaian barcode untuk memudahkan dalam bertransaksi</p>
            </div>
        </div>
</div>
@endsection
