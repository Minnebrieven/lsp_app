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
        $unit = UnitKompetensi::with('units')->get;
        return view('user.daftar.apl1')->with('unit', $unit);
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

        return(url('daftar/data_pekerjaan'));
    }

    public function data_pekerjaan($aplid)
    {
        return view('daftar.data_pekerjaan')->with('aplid',$aplid);
    }

    public function data_pekerjaan_save(Request $r)
    {
        $pekerjaan = new Data_pekerjaan_sekarang();
        $pekerjaan->user_id = Auth::user()->id;
        $pekerjaan->apl_id = $r->input('apl_id');
        $pekerjaan->nama_perusahaan = $r->input('nama_perusahaan');
        $pekerjaan->jabatan = $r->input('jabatan');
        $pekerjaan->alamat = $r->input('alamat');
        $pekerjaan->no_telp = $r->input('no_telp');
        $pekerjaan->fax = $r->input('fax');
        $pekerjaan->email = $r->input('email');
        $pekerjaan->save();

        return redirect(url('daftar/bukti_kelengkapan'));
    }

    public function status_kelengkapan()
    {
        $kelengkapan = BuktiKelengkapanPemohon::with('kelengkapans')->get();
        return view('operator.buktikompetensi.add', ['kelengkapan' => $kelengkapan]);
    }

    public function status_kelengkapan_save(Request $req)
    {
        $kelengkapan = BuktiKelengkapanPemohon::with('kelengkapans')->get();
        foreach ($kelengkapan as $index => $kel) 
        {
            $status_kelengkapan = new Status_kelengkapan();
            $status_kelengkapan->user_id = Auth::user()->id;
            $status_kelengkapan->bukti_kelengkapan_id = $kel->id;
            $status_kelengkapan->status = $req->input('status'.$index);
            $status_kelengkapan->file = $req->input('file'.$index);
            $status_kelengkapan->save();
        }

        return redirect(url('daftar/kompetensi_relevan'));
    }

    public function edit_status_kelengkapan($id)
    {
        $bukti = BuktiKelengkapanPemohon::find();
        $status = Status_kelengkapan::where('id',$id)->get();
        return view('admin.bukti.edit', ['bukti'=>$bukti, 'status'=>$status]);
    }

    public function update_status_kelengkapan(Request $r)
    {
        $kelengkapan = BuktiKelengkapanPemohon::with('kelengkapans')->get();
        foreach ($kelengkapan as $index => $kel) 
        {
            $status_kelengkapan = Status_kelengkapan::find($r->input('id'));
            $status_kelengkapan->bukti_kelengkapan_id = $r->input('bukti_kelengkapan_id');
            $status_kelengkapan->status = $req->input('status'.$index);
            $status_kelengkapan->file = $req->input('file'.$index);
            $status_kelengkapan->save();
        }

        return redirect(url('daftar/kompetensirelevan'));
    }

    public function kompetensi_relevan_add()
    {
        return view('admin.kompetensi_relevan.add');
    }

    public function komptensi_relevan()
    {
        $kompetensi = BuktiKompetensiRelevan::with('kompetensirelevans')->get();
        return view('daftar.kompetensirelevan', ['kompetensi' => $kompetensi]);
    }

    public function komptensi_relevan_save(Request $req)
    {
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
