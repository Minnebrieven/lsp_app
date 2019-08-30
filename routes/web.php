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
    return view('welcome');
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
