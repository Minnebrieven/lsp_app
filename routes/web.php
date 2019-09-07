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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('landing.about');
});


Route::group(['prefix' => 'berita'], function()
{
    Route::get('/berita', 'BeritaController@all_berita');
    Route::get('/berita/detail/{id}', 'BeritaController@detail_berita');

    Route::post('/berita/new', 'BeritaController@create_berita');
    Route::get('/berita/edit/{id}', 'BeritaContoller@edit_berita');
    Route::post('/berita/edit/{id}', 'BeritaContoller@edit_berita_save');
});

Route::group(['prefix' => 'sertifikasi'], function()
{
    Route::get('/', 'SertifikasiController@sertifikasi');
    Route::get('/new', 'SertifikasiController@add_sertifikasi');
    Route::get('/edit/{id}', 'SertifikasiController@edit_sertifikasi');
    Route::post('/save', 'SertifikasiController@save');
    Route::post('/update', 'SertifikasiController@update_sertifikasi');
});

Route::group(['prefix' => 'sertifikasi/skema'], function()
{
    Route::get('/{id}', 'SkemaController@get_skema');
});

Route::get('/login', 'LoginController@login');
Route::post('/proses-login', 'LoginController@proses_login');

Route::get('/register', 'LoginController@register');
Route::post('/proses-register', 'LoginController@proses_register');



Route::get('/panel', 'PanelController@index');
Route::group(['prefix' => 'panel'], function(){
Route::get('/apl1', 'PanelController@apl1');
Route::get('/apl2', 'PanelController@apl2');
Route::get('/bukti-pembayaran', 'PanelController@bukti_pembayaran');
Route::get('/detail-pembayaran', 'PanelController@detail_pembayaran');
Route::get('/bayar', 'PanelController@bayar');
});

Route::get('/admin', 'AdminController@index');
Route::group(['prefix' => 'admin'], function(){
Route::get('/list-bank', 'BankController@list_bank');
Route::get('/tambah-bank', 'BankController@tambah_bank');
Route::post('/proses-tambah-bank', 'BankController@proses_tambah_bank');
});