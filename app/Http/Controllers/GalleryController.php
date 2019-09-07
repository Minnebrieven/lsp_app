<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Gallery;

class GalleryController extends Controller
{
	public function list_gallery()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.list-gallery', compact('gallery'));
    }
    
    public function tambah_gallery()
    {
    	return view('admin.gallery.tambah-gallery');
    }

    public function proses_tambah_gallery(Request $r)
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
