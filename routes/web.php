<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Apps\MenuHomePageController@landingpage');

Route::get('/test_barcode', function () {
    return view('test_barcode');
});

Route::group(['middleware' => ['pemilik_toko']], function () {
    
});
Route::group(['middleware' => ['pegawai_toko']], function () {
    
});
Route::group(['middleware' => ['admin ']], function () {
    
});

Auth::routes();

Route::get('/test', 'Apps\MenuTransaksiController@addCart');

Route::prefix('home')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/laporan', 'Apps\MenuLaporanController@index')->name('menu_laporan');
    Route::get('/manajemen', 'Apps\MenuManajemenController@index')->name('menu_manajemen');
    Route::get('/pengaturan', 'Apps\MenuPengaturanController@index')->name('menu_pengaturan');
    Route::prefix('produk')->group(function(){
        Route::get('/', 'Apps\MenuProdukController@index')->name('menu_produk');
        Route::post('/add', 'Apps\MenuProdukController@add')->name('add_produk');
    });
    Route::prefix('ukm')->group(function(){
        Route::get('/', 'Apps\MenuTokoController@index')->name('menu_ukm');
        Route::post('/add', 'Apps\MenuTokoController@add')->name('add_ukm');
    });
    Route::prefix('karyawan')->group(function(){
        Route::get('/', 'Apps\MenuPegawaiController@index')->name('menu_karywan');
    });
    Route::prefix('diskon')->group(function(){
        Route::get('/', 'Apps\MenuDiskonController@index')->name('menu_diskon');
    });
    Route::prefix('editprofil')->group(function(){
        Route::get('/', 'Apps\MenuEditProfilController@index')->name('menu_editprofil');
    });
    Route::prefix('cart')->group(function(){
        Route::post('/', 'Apps\MenuTransaksiController@addCart')->name('add_cart');
    });
});

Route::get('/scan_barcode', 'HomeController@index')->name('scan_barcode');