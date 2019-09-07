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

Route::get('/login', 'LoginController@login');
Route::post('/proses-login', 'LoginController@proses_login');
Route::get('/register', 'LoginController@register');
Route::post('/proses-register', 'LoginController@proses_register');

Route::group(['prefix' => 'panel'], function ()
{
    Route::get('/', 'PanelController@index');
    Route::get('/apl1', 'PanelController@apl1');
    Route::get('/apl2', 'PanelController@apl2');
    Route::get('/bukti-pembayaran', 'PanelController@bukti_pembayaran');
    Route::get('/bayar', 'PanelController@bayar');
});

Route::group(['prefix' => 'daftar'], function ()
{
    Route::get('/', 'DaftarController@apl01');
    Route::get('/save', 'DaftarController@apl01save');
    Route::get('/data_pekerjaan/{$aplid}', 'DaftarController@data_pekerjaan');
    Route::get('/data_pekerjaan/save', 'DaftarController@data_pekerjaan_save');
    
});

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