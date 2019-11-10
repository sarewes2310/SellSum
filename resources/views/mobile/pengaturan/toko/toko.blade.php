@extends('mobile.layouts.app_m')

@section('link_asal')
    <a href="#" class="list-group-item list-group-item-action bg-light">Beli</a>
    <a href="{{ route('menu_laporan') }}" class="list-group-item list-group-item-action bg-light">Laporan</a>
    <a href="{{ route('menu_manajemen') }}" class="list-group-item list-group-item-action bg-light">Manajemen</a>
    <a href="{{ route('menu_pengaturan') }}" class="list-group-item list-group-item-action bg-light">Pengaturan</a>
@endsection

@section('title-menu')
    UKM
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
                @foreach ($data as $dataku)    
                    <tr>
                        <td class="#">
                            <h5 class="nama isi-produk-item">
                                {{ $dataku->nama}}
                            </h5>
                            <p class="jumlah isi-produk-item">
                                {{ $dataku->deskripsi}}
                            </p>
                        </td>
                        <td class="# text-right">
                            <button type="button" class="btn btn-danger margin-bot">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row fixed-bottom text-right fab">
        <div class="col">
            <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus"></i></button>
        </div>
    </div>

    <!-- Modal -->
    <form method="POST" action="{{ route('add_ukm') }}">
        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah UKM</h5>
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
                                <input id="notelp" type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ old('notelp') }}" required autocomplete="notelp" placeholder="{{ __('Nomer Telepon') }}">

                                @error('notelp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row size-input">

                            <div class="col-md-6">
                                <input id="web" type="text" class="form-control @error('web') is-invalid @enderror" name="web" value="{{ old('web') }}" required autocomplete="web" placeholder="{{ __('Website') }}">

                                @error('web')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row size-input">

                            <div class="col-md-6">
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" required placeholder="{{ __('Alamat UKM') }}" name="alamat">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row size-input">

                            <div class="col-md-6">
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="5" required placeholder="{{ __('Deskripsi UKM') }}" name="deskripsi">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
@endsection