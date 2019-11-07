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

Route::get('/home', 'HomeController@index')->name('home');
