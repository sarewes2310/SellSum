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
            <img src="{{ asset('asset_icon/pembukuan.png') }}" class="item-fitur-gambar">
            <p>Scan barcode dan pembukuan otomatis</p>
        </div>
        <div class="col justify-content-center text-center item-fitur">
            <img src="{{ asset('asset_icon/laporan.png') }}" class="item-fitur-gambar">
            <p>Penyajian laporan dan pembukaan dari UKM</p>
        </div>
    </div>
    <div class="col text-center">
            <h4>Bagaiman <b>SELLSUM</b> Bekerja ?</h4>
        </div>
        <div class="row fitur">
            <div class="col justify-content-center text-center item-fitur">
                <img src="{{ asset('asset_icon/cara-01.png') }}" class="item-fitur-gambar">
                <p>Daftarkan UKM dan produk Anda</p>
            </div>
            <div class="col justify-content-center text-center item-fitur">
                <img src="{{ asset('asset_icon/cara-02.png') }}" class="item-fitur-gambar">
                <p>Dapatkan barcode secara gratis</p>
            </div>
        </div>
        <div class="row fitur">
            <div class="col justify-content-center text-center item-fitur">
                <img src="{{ asset('asset_icon/cara-03.png') }}" class="item-fitur-gambar">
                <p>Scan barcode ketika bertransaksi</p>
            </div>
            <div class="col justify-content-center text-center item-fitur">
                    <img src="{{ asset('asset_icon/cara-04.png') }}" class="item-fitur-gambar">
                    <p>Pembukuan dan laporan otomatis setelah scan transaksi</p>
                </div>
        </div>
</div>
@endsection
