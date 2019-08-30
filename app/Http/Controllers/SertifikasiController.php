<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sertifikasi;

class SertifikasiController extends Controller
{
    public function sertifikasi()
    {
        $certification = schema_certification::find();
        return view('certification', ['certification' => $certification]);
    }

    public function add_sertifikasi()
    {
        return view('operator.sertifikasi.add');
    }

    public function save(Requests $request)
    {
        $sertifikasi = new Sertifikasi();
        $sertifikasi->nama = $request->input('nama');
        $sertifikasi->kategori = $request->input('kategori');
        if (Input::hasFile('foto')) {
            $file1 = $request->file('foto');
            $filename1 = $file1->getClientOriginalName();
            Input::file('foto')->move(storage_path('images'), $filename1);
            $m->foto = $filename1;
        }
        $sertifikasi->save();
        return redirect(url('/sertifikasi'));
    }

    public function edit_sertifikasi($id)
    {
        $sertifikasi = Sertifikasi::find($id);
        return view('operator.sertifikasi.edit_sertifikat', ['sertifikasi' => $sertifikasi]);
    }

    public function update_sertifikasi(Request $request)
    {
        $sertifikasi = Sertifikasi::find($request->input('id'));
        $sertifikasi->nama = $request->input('nama');
        $sertifikasi->kategori = $request->input('kategori');
        if (Input::hasFile('foto')) {
            $file1 = $r->file('foto');
            $filename1 = $file1->getClientOriginalName();
            Input::file('foto')->move(storage_path('images'), $filename1);
            $sertifikasi->foto = $filename1;
        }

        $sertifikasi->save();
        return redirect(url('/sertifikasi'));
    }

    public function delete_sertifikat($id)
    {
        $sertifikasi = Sertifikasi::find($id);
        $sertifikasi->delete();
        
        return redirect('/sertifikasi');
    }

}
