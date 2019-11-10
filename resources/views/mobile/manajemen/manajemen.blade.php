@extends('mobile.layouts.app_m')

@section('link_asal')
    <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-light">Beli</a>
    <a href="{{ route('menu_laporan') }}" class="list-group-item list-group-item-action bg-light">Laporan</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Manajemen</a>
    <a href="{{ route('menu_pengaturan') }}" class="list-group-item list-group-item-action bg-light">Pengaturan</a>
@endsection

@section('title-menu')
    Manajemen
@endsection

@section('content')
<div class="container py-41">
    <div class="row" style="margin-bottom: 4%">
        <div class="col">
            <a href="{{ route('menu_produk') }}">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 text-center margin-ato">
                                <h1><i class="fas fa-user-tie"></i></h1>
                            </div>
                            <div class="col-8 text-left">
                                <h5><b>Karyawan</b></h5>
                                <p>menu untuk mengatur karyawan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row" style="margin-bottom: 4%">
        <div class="col">
            <a href="{{ route('menu_produk') }}">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 text-center margin-ato">
                                <h1><i class="fas fa-percent"></i></h1>
                            </div>
                            <div class="col-8 text-left">
                                <h5><b>Diskon</b></h5>
                                <p>menu untuk mengatur diskon produk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row" style="margin-bottom: 4%">
        <div class="col">
            <a href="{{ route('menu_produk') }}">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 text-center margin-ato">
                                <h1><i class="fas fa-gifts"></i></h1>
                            </div>
                            <div class="col-8 text-left">
                                <h5><b>Produk</b></h5>
                                <p>menu untuk mengatur produk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
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
