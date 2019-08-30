<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

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
}
