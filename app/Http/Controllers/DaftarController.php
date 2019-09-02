<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Apl01;
use App\Data_pekerjaan_sekarang;
use App\UnitKompetensi;
use App\BuktiKelengkapanPemohon;
use App\Status_kelengkapan;
use App\BuktiKompetensiRelevan;
use App\Status_kompetensi_relevan;

class DaftarController extends Controller
{
    public function apl01()
    {
        $kelengkapan = BuktiKelengkapanPemohon::with('kelengkapans')->get();
        $unit = UnitKompetensi::with('units')->get;
        return view('user.daftar.apl1', ['kelengkapan' => $kelengkapan, 'unit_kompetensi' => $unit]);
    }

    public function apl01save(Request $req, $judul_sertifikasi, $nomor_sertifikasi)
    {
        $apl = new Apl01;
        $apl->user_id = Auth::user()->id;
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
        $apl->judul_sertifikasi = $judul_sertifikasi;
        $apl->nomor_sertifikasi = $nomor_sertifikasi;
        $apl->tujuan_asesmen = $req->input('tujuan_asesmen');
        $apl->save();

        $kelengkapan = BuktiKelengkapanPemohon::with('kelengkapans')->get();
        foreach ($kelengkapan as $index => $kel) 
        {
            $status_kelengkapan = new Status_kelengkapan();
            $status_kelengkapan->user_id = Auth::user()->id;
            $status_kelengkapan->bukti_kelengkapan_id = $kel->id;
            $status_kelengkapan->status = $req->input('status'.$index);
            $status_kelengkapan->status = $req->input('file'.$index);
            $status_kelengkapan->save();
        }

        $kompetensi = BuktiKompetensiRelevan::with('kompetensirelevans')->get();
        foreach($kompetensi as $index => $stats)
        {
            $status = new Status_kompetensi_relevan();
            $status->user_id = Auth::user()->id;
            $status->bukti_kompetensi_relevan_id = $stats->id;
            $status->status = $req->input('status_relevan'.$index);
            $status->file = $req->input('file_relevan'.$index);
            $status->save();
        }
    }
}
