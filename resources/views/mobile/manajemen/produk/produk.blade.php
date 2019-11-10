@extends('mobile.layouts.app_m')

@section('link_asal')
    <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-light">Beli</a>
    <a href="{{ route('menu_laporan') }}" class="list-group-item list-group-item-action bg-light">Laporan</a>
    <a href="{{ route('menu_manajemen') }}" class="list-group-item list-group-item-action bg-light">Manajemen</a>
    <a href="{{ route('menu_pengaturan') }}" class="list-group-item list-group-item-action bg-light">Pengaturan</a>
@endsection

@section('title-menu')
    Produk
@endsection

@section('content')
<div class="container" style="padding-top:0% !important">
    <div class="row">
        <!--<div class="col-3 col-sm-3 col-md-3 col-xl-3" style="margin:auto">
            <img src="{{ asset('asset_icon/solei-himmelvid-_oCf_5xtizI-unsplash.jpg') }}" class="rounded-circle" style="width: 100%">
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-xl-6">
            <p class="nama isi-produk-item">
                Mantul
            </p>
            <p class="jumlah isi-produk-item">
                qty : 50
            </p>
        </div>
        <div class="col-3 col-sm-3 col-md-3 col-xl-3">
            <button type="button" class="btn btn-warning margin-bot">Ubah</button>
            <button type="button" class="btn btn-danger margin-bot">Hapus</button>
        </div>-->
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
                                {{ $list_produk->harga_ses }}
                            </p>
                            <p class="jumlah isi-produk-item">
                                {{ $list_produk->qty }}
                            </p>
                        </td>
                        <td class="btn-tab-cell">
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row fixed-bottom text-right fab">
        <div class="col">
            <button type="button" onclick="return addProd()" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus"></i></button>
        </div>
    </div>

    <!-- Modal -->
    <form method="POST" action="{{ route('add_produk') }}">
        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- KOSONG -->
                        @csrf

                        <div class="row size-input">

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Nama') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row size-input">

                            <div class="col-md-6">
                                <input id="harga_seb" type="text" class="form-control @error('harga_seb') is-invalid @enderror" name="harga_seb" value="{{ old('harga_seb') }}" required autocomplete="harga_seb" placeholder="{{ __('Harga Barang Asli') }}">

                                @error('harga_seb')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row size-input">

                                <div class="col-md-6">
                                    <input id="harga_ses" type="text" class="form-control @error('harga_ses') is-invalid @enderror" name="harga_ses" value="{{ old('harga_ses') }}" required autocomplete="harga_ses" placeholder="{{ __('Harga Barang Jual') }}">
    
                                    @error('harga_ses')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="row size-input">

                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah') }}" required autocomplete="web" placeholder="{{ __('Jumlah Barang') }}">

                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row size-input">

                            <div class="col-md-6">
                                <select class="custom-select mr-sm-2 @error('id_toko') is-invalid @enderror" id="id_toko" name="id_toko">
                                    <option selected>Pilih UKM</option>
                                    @foreach ($data_ukm as $list_ukm)                    
                                        <option value="{{ $list_ukm->id }}">{{ $list_ukm->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_toko')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input id="kodebar" type="text" name="kodebar"placeholder="{{ __('Jumlah Barang') }}">
                        <div class="row size-input">
                            <svg class="barcode">
                            </svg>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('link_javascript')
<script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/barcodes/JsBarcode.ean-upc.min.js" crossorigin="anonymous"></script>
<script src="{{ secure_asset('js/barcode.js') }}"></script>
@endsection