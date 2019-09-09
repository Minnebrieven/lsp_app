<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Berita;
use Illuminate\Support\Facades\Input;

class BeritaController extends Controller
{
    public function all_berita()
    {
        $berita = Berita::orderBy('id', 'asce');
        return view('berita.home', ['berita' => $berita]);
    }

    public function detail_berita($id)
    {
        $berita = Berita::find($id);
        return view('berita.detail_berita', ['berita' => $berita]);
    }
    
    public function edit_berita($id)
    {
            
    }
        public function list_berita()
    {
        $berita = Berita::all();
        return view('admin.berita.list-berita', compact('berita'));
    }
    
    public function tambah_berita()
    {
        return view('admin.berita.tambah-berita');
    }

    public function proses_tambah_berita(Request $r)
    {
        $tambah = new Berita;
        $tambah->judul = $r->judul;
        $tambah->isi = $r->isi;

        if (Input::hasFile('gambar')) {
            $file = $r->file('gambar');
            $filename = $file->getClientOriginalName();
            Input::file('gambar')->move('berita/', $filename);
            $tambah->gambar = $filename;
        }

        $tambah->save();

        return redirect('admin/tambah-bank')->with('sukses', 'Berita Berhasil Ditambah');
    }
}
