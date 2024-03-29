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
Route::get('/logout', 'LoginController@logout');

Route::group(['prefix' => 'daftar'], function ()
{
    Route::get('/', 'DaftarController@apl01');
    Route::post('/save', 'DaftarController@apl01save');
    Route::get('/data_pekerjaan/{$aplid}', 'DaftarController@data_pekerjaan');
    Route::post('/data_pekerjaan/save', 'DaftarController@data_pekerjaan_save');
    Route::get('/status_kelengkapan', 'DaftarController@status_kelengkapan');
    Route::post('/status_kelengkapan_save', 'DaftarController@status_kelengkapan_save');
    Route::get('/kompetensi_relevan', 'DaftarController@kompetensi_relevan');
    Route::post('/kompetensi_relavan_save', 'DaftarController@kompetensi_relevan_save');
    Route::post('/apl02', 'DaftarController@apl2save');
});

Route::get('/panel', 'PanelController@index');
Route::group(['prefix' => 'panel'], function(){
Route::get('/apl1', 'PanelController@apl1');
Route::get('/apl2', 'PanelController@apl2');
Route::get('/bukti-pembayaran', 'PanelController@bukti_pembayaran');
Route::get('/detail-pembayaran/{nomor_sertifikasi}', 'PanelController@detail_pembayaran');
Route::get('/bukti-pendaftaran', 'PanelController@bukti_pendaftaran');
Route::get('/bayar', 'PanelController@bayar');
Route::post('/bayar-sertifikasi', 'PanelController@bayar_sertifikasi');
});

Route::get('/admin', 'AdminController@index');
Route::group(['prefix' => 'admin'], function(){
Route::get('/list-bank', 'BankController@list_bank');
Route::get('/tambah-bank', 'BankController@tambah_bank');
Route::post('/proses-tambah-bank', 'BankController@proses_tambah_bank');
Route::get('/list-gallery', 'GalleryController@list_gallery');
Route::get('/tambah-gallery', 'GalleryController@tambah_gallery');
Route::post('/proses-tambah-gallery', 'GalleryController@proses_tambah_gallery');
Route::get('/list-kompetensi', 'KompetensiController@list_kompetensi');
Route::get('/tambah-kompetensi', 'KompetensiController@tambah_kompetensi');
Route::post('/proses-tambah-kompetensi', 'KompetensiController@proses_tambah_kompetensi');
Route::get('/list-gallery', 'GalleryController@list_gallery');
Route::get('/tambah-gallery', 'GalleryController@tambah_gallery');
Route::post('/proses-tambah-gallery', 'GalleryController@proses_tambah_gallery');
Route::get('/list-kompetensi', 'KompetensiController@list_kompetensi');
Route::get('/tambah-kompetensi', 'KompetensiController@tambah_kompetensi');
Route::post('/proses-tambah-kompetensi', 'KompetensiController@proses_tambah_kompetensi');
Route::get('/list-berita', 'BeritaController@list_berita');
Route::get('/tambah-berita', 'BeritaController@tambah_berita');
Route::post('/proses-tambah-berita', 'BeritaController@proses_tambah_berita');

Route::get('/list-pertanyaan', 'PertanyaanController@list_pertanyaan');
Route::get('/tambah-pertanyaan', 'PertanyaanController@tambah_pertanyaan');
Route::post('/proses-tambah-pertanyaan', 'PertanyaanController@proses_tambah_pertanyaan');

Route::get('/list-apl1', 'Apl01Controller@list_apl1');
Route::get('/tambah-apl1', 'Apl01Controller@tambah_apl1');
Route::post('/proses-tambah-apl1', 'Apl01Controller@proses_tambah_apl1');

Route::get('/list-transaksi', 'Apl01Controller@list_transaksi');
Route::get('/detail-transaksi/{nomor_sertifikasi}', 'Apl01Controller@detail_transaksi');
Route::get('/transaksi-lunas/{nomor_sertifikasi}', 'Apl01Controller@transaksi_lunas');
Route::get('/transaksi-ditolak/{nomor_sertifikasi}', 'Apl01Controller@transaksi_ditolak');
});