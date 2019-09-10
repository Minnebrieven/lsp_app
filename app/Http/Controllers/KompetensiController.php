<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\UnitKompetensi;

class KompetensiController extends Controller
{
	public function list_kompetensi()
    {
        $kompetensi = UnitKompetensi::all();
        return view('admin.kompetensi.list-kompetensi', compact('kompetensi'));
    }
    
    public function tambah_kompetensi()
    {
    	return view('admin.kompetensi.tambah-kompetensi');
    }

    public function proses_tambah_kompetensi(Request $r)
    {
    	$tambah = new UnitKompetensi;
    	$tambah->nomor = $r->nomor;
    	$tambah->kode_unit = $r->kode_unit;
    	$tambah->judul_unit = $r->judul_unit;

    	$tambah->save();

    	return redirect('admin/tambah-bank')->with('sukses', 'Bank Berhasil Ditambah');
    }
}
