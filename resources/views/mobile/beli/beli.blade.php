@extends('mobile.layouts.app_m')

@section('link_asal')
    <a href="#" class="list-group-item list-group-item-action bg-light">Beli</a>
    <a href="{{ route('menu_laporan') }}" class="list-group-item list-group-item-action bg-light">Laporan</a>
    <a href="{{ route('menu_manajemen') }}" class="list-group-item list-group-item-action bg-light">Manajemen</a>
    <a href="{{ route('menu_pengaturan') }}" class="list-group-item list-group-item-action bg-light">Pengaturan</a>
@endsection

@section('title-menu')
    Beli
@endsection

@section('content')
<div class="container py-41">
    <div class="row" style="margin-bottom: 4%">
        <div class="col">
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>Pilih UKM</option>
                @foreach ($data_ukm as $list_ukm)                    
                    <option value="{{ $list_ukm->id }}">{{ $list_ukm->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="col text-right">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#cameraModal"><i class="fas fa-barcode"></i></button>
        </div>
    </div>
    <div class="row line-tgl">
        <div class="col align-items-center">
            <p class="line-disp">09 September 2019</p>
        </div>
    </div>
    <!--<div class="row isi-produk">
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
    </div>-->

    <div class="row isi-produk">
        <table class="table table-striped">
            <tbody>
                @foreach ($data_produk as $list_produk)
                    <tr>
                        <td class="img-tab-cell">
                            <img src="{{ asset('asset_icon/solei-himmelvid-_oCf_5xtizI-unsplash.jpg') }}" class="rounded-circle img-tab-cell-item" style="width: 100%">
                        </td>
                        <td class="isi-tab-cell">
                            <p class="nama isi-produk-item">
                                {{ $list_produk->nama }}
                            </p>
                            <p class="harga isi-produk-item">
                                {{ $list_produk->harga }}
                            </p>
                            <p class="jumlah isi-produk-item">
                                {{ $list_produk->qty }}
                            </p>
                        </td>
                        <td class="btn-tab-cell">
                            <button type="button" class="btn btn-warning" onclick="event.preventDefault();
                            document.getElementById('jual-form').submit();">
                                Jual
                            </button>
                            <form id="jual-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row"  style="position: fixed;bottom:3%; width:100%">
        <div class="col">
            <div class="card bg-warning">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center" style="margin:auto">
                                <h3>
                                    0
                                </h3>
                            </div>
                            <div class="col-7" style="margin:auto">
                                <h5>Keranjang</h5>
                                <p>Belum ada barang</p>
                            </div>
                            <div class="col text-center" style="margin:auto">
                                <h4>
                                    <i class="fas fa-shopping-cart"></i>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

@section('link_javascript')
<script src="{{ secure_asset('js/webcamjs/webcam.min.js') }}"></script>
<script src="{{ secure_asset('js/camera.js') }}" async></script>
@endsection