<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('access', 'AccessController');
Route::resource('barang', 'BarangController');
Route::resource('diskon', 'DiskonController');
Route::resource('itemkerba', 'ItemkerbaController');
Route::resource('katbarang', 'KategoriBarangController');
Route::resource('roles', 'RolesController');
Route::resource('pembayaran', 'PembayaranController');
Route::resource('toko', 'TokoController');
Route::resource('keranjang', 'KeranjangController');
Route::resource('pegawai', 'PegawaiController');