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
    	$tambah = new Gallery;
    	$tambah->nama_bank = $r->nama_bank;
    	$tambah->no_rekening = $r->no_rekening;
    	$tambah->nama_pemilik = $r->nama_pemilik;
    	$tambah->logo_bank = $r->logo_bank;

    	if (Input::hasFile('logo_bank')) {
            $file = $r->file('logo_bank');
            $filename = $file->getClientOriginalName();
            Input::file('logo_bank')->move('logo_bank/', $filename);
            $tambah->logo_bank = $filename;
        }

    	$tambah->save();

    	return redirect('admin/tambah-bank')->with('sukses', 'Bank Berhasil Ditambah');
    }
}
