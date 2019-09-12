<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\DaftarPertanyaan;
use \App\UnitKompetensi;

class PertanyaanController extends Controller
{
    public function list_pertanyaan()
    {
        $pertanyaan = DaftarPertanyaan::all();
        return view('admin.pertanyaan.list-pertanyaan', compact('pertanyaan'));
    }
    
    public function tambah_pertanyaan()
    {
    	return view('admin.pertanyaan.tambah-pertanyaan');
    }

    public function proses_tambah_pertanyaan(Request $r)
    {
    	$tambah = new DaftarPertanyaan;
    	$tambah->elemen_kompetensi = $r->elemen_kompetensi;
    	$tambah->kuk = $r->kuk;
    	$tambah->pertanyaan = $r->pertanyaan;

    	$tambah->unit_id = $r->unit_id;
        $tambah->jurusan = 'aa';

    	$tambah->save();

    	return redirect('admin/tambah-pertanyaan')->with('sukses', 'Pertanyaan Berhasil Ditambah');
    }
}
