<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Apl01;

class Apl01Controller extends Controller
{
    public function list_apl1()
    {
        $apl1 = Apl01::all();
        return view('admin.apl1.list-apl1', compact('apl1'));
    }

    public function edit_apl01($id)
    {
        $apl01 = Apl01::find($id);
        return view('admin.apl01.edit',['apl01'=>$apl01]);
    }

    public function update_apl01(Request $req)
    {
        $apl = Apl01::find($r);
        $apl->nik = $req->input('nik');
        $apl->nisn = $req->input('nisn');
        $apl->nama_lengkap = $req->input('nama_lengkap');
        $apl->tempat_lahir = $req->input('tempat_lahir');
        $apl->jenis_kelamin = $req->input('jenis_kelamin');
        $apl->kebangsaan = $req->input('kebangsaan');
        $apl->alamat_rumah = $req->input('alamat_rumah');
        $apl->no_telp = $req->input('no_telp');
        $apl->no_hp = $req->input('no_hp');
        $apl->no_kantor = $req->input('no_kantor');
        $apl->email = $req->input('email');
        $apl->pendidikan_terakhir = $req->input('pendidikan_terakhir');
        $apl->judul_sertifikasi = $req->input('judul_sertifikasi');
        $apl->nomor_sertifikasi = $req->input('nomor_sertifikasi');
        $apl->tujuan_asesmen = $req->input('tujuan_asesmen');
        $apl->save();
    }

    public function delete_apl01($id)
    {
        $apl01 = Apl01::find($id);
        $apl01->delete();
        return redirect(url('/'));
    }
}
