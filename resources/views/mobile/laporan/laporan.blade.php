@extends('mobile.layouts.app_m')

@section('link_asal')
    <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-light">Beli</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Laporan</a>
    <a href="{{ route('menu_manajemen') }}" class="list-group-item list-group-item-action bg-light">Manajemen</a>
    <a href="{{ route('menu_pengaturan') }}" class="list-group-item list-group-item-action bg-light">Pengaturan</a>
@endsection

@section('title-menu')
    Laporan
@endsection

@section('content')
<div class="container py-41">
    <div class="row" style="margin-bottom: 4%">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <h5>Jumlah Transaksi</h5>
                            <h3>90</h3>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col text-center">
                            <h6>Jumlah Penjualan</h6>
                            <h4>90</h4>
                        </div>
                        <div class="col text-center">
                            <h6>Jumlah Pelanggan</h6>
                            <h4>12</h4>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
    <div class="row line-tgl">
        <div class="col align-items-center">
            <p class="line-disp">09 September 2019</p>
        </div>
    </div>
    <div class="row isi-produk">
        <div class="col-3 col-sm-3 col-md-3 col-xl-3" style="margin:auto">
            <img src="{{ asset('asset_icon/solei-himmelvid-_oCf_5xtizI-unsplash.jpg') }}" class="rounded-circle" style="width: 100%">
        </div>
        <div class="col-5 col-sm-6 col-md-6 col-xl-6">
            <p class="nama isi-produk-item">
                Mantul
            </p>
            <p class="nama isi-produk-item">
                23 - 10 -1997
            </p>
        </div>
        <div class="col-4 col-sm-3 col-md-3 col-xl-3">
            <p class="harga isi-produk-item">
                Rp. 50000
            </p>
        </div>
    </div>

    <div class="row"  style="position: fixed;bottom:3%; width:100%">
        <div class="col">
            
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="cameraModal" tabindex="-1" role="dialog" aria-labelledby="cameraModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Camera</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="my_camera" style="width: 100%;height: 60%"></div>
                    
                    <!--<div class="select">
                        <label for="audioSource">Audio source: </label><select id="audioSource"></select>
                    </div>
                    <div class="select">
                        <label for="videoSource">Video source: </label><select id="videoSource"></select>
                    </div>
                    <video autoplay muted playsinline></video>

                    <video id="player" controls autoplay></video>
                    <button id="capture">Capture</button>
                    <canvas id="canvas" width=320 height=240></canvas>-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
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
