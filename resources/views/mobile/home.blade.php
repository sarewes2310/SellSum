@extends('mobile.layouts.app_m')

@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 4%">
        <div class="col">
            <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategori Produk
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"></a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>
        <div class="col text-right">
            <button type="button" class="btn btn-outline-primary">Scan</button>
        </div>
    </div>
    <div class="row line-tgl">
        <div class="col align-items-center">
            <p class="line-disp">23 Oktober 2019</p>
        </div>
    </div>
    <div class="row isi-produk">
        <div class="col-3 col-sm-3 col-md-3 col-xl-3" style="margin:auto">
            <img src="{{ asset('asset_icon/solei-himmelvid-_oCf_5xtizI-unsplash.jpg') }}" class="rounded-circle" style="width: 100%">
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-xl-6">
            <p class="nama isi-produk-item">
                Mantul
            </p>
            <p class="harga isi-produk-item">
                Rp. 50000
            </p>
            <p class="jumlah isi-produk-item">
                qty : 50
            </p>
        </div>
        <div class="col-3 col-sm-3 col-md-3 col-xl-3">
            <button type="button" class="btn btn-warning">Jual</button>
        </div>
    </div>
    <!--<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>-->
</div>
@endsection
