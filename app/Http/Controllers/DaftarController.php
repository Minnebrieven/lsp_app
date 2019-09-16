<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use \App\Apl01;
use \App\Apl02;
use App\Data_pekerjaan_sekarang;
use App\UnitKompetensi;
use App\BuktiKelengkapanPemohon;
use App\Status_kelengkapan;
use App\BuktiKompetensiRelevan;
use App\Status_kompetensi_relevan;
use App\JawabanPertanyaan;
use Auth;

class DaftarController extends Controller
{
    public function apl01()
    {
        $unit = UnitKompetensi::with('units')->get();
        return view('user.daftar.apl1')->with('unit', $unit);
    }

    public function apl01save(Request $req)
    {
        $apl = new Apl01;
        $apl->user_id = Auth::user()->id;
        $apl->nik = $req->input('nik');
        $apl->nisn = $req->input('nisn');
        $apl->nama_lengkap = $req->input('nama_lengkap');
        $apl->tempat_lahir = $req->input('tempat_lahir');
        $apl->tanggal_lahir = $req->tanggal_lahir;
        $apl->jenis_kelamin = $req->jenis_kelamin;
        $apl->kebangsaan = $req->input('kebangsaan');
        $apl->alamat_rumah = $req->input('alamat_rumah');
        $apl->no_telp = $req->input('no_telp');
        $apl->no_hp = $req->input('no_hp');
        $apl->no_kantor = $req->input('no_kantor');
        $apl->email = $req->input('email');
        $apl->pendidikan_terakhir = $req->input('pendidikan_terakhir');
        $apl->judul_sertifikasi = $req->judul_sertifikasi;
        $apl->nomor_sertifikasi = $req->nomor_sertifikasi;
        $apl->tujuan_asesmen = $req->input('tujuan_asesmen');
        $apl->invoice = rand(10,100);
        $apl->status = 'BELUM LUNAS';
        $apl->save();

        return redirect('/panel/apl2');
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
        
        redirect(url('daftar/apl02'));
    }

    public function apl02()
    {
        $unit = UnitKompetensi::with('units')->get();
        $pertanyaan = DaftarPertanyaan::with('pertanyaans')->get();

        return view('daftar.apl02');
    }

    public function apl02a(Request $r)
    {
        $pertanyaan = DaftarPertanyaan::with('pertanyaans')->get();
        foreach($pertanyaan as $index => $jwbn)
        {
            $jawaban = new JawabanPertanyaan();
            $jawaban->user_id = Auth::user()->id;
            $jawaban->pertanyaan_id = $r->input('pertanyaan_id');
            $jawaban->penilaian = $r->input('penilaian');
            $jawaban->diisi_asesor = $r->input('diisi_asesor');
            $jawaban->bukti_kompetensi = $r->input('bukti_kompetensi');
            $jawaban->save();
        }
    }

    public function apl2save(Request $r)
    {
        $apl2 = new Apl02;
        $apl2->user_id = Auth::user()->id;
        $apl2->judul = $r->judul;
        $apl2->nomor = $r->nomor;
        $apl2->tuk = $r->tuk;
        $apl2->nama_asesor = $r->nama_asesor;
        $apl2->nama_peserta = $r->nama_peserta;
        $apl2->tanggal = $r->tanggal;

        $jawab = new JawabanPertanyaan;
        $jawab->user_id = Auth::user()->id;
        $jawab->pertanyaan_id = $r->pertanyaan_id;
        $jawab->penilaian = $r->penilaian;
        $jawab->diisi_asesor = $r->diisi_asesor;
        $jawab->bukti_kompetensi = $r->bukti_kompetensi;
        $jawab->save();

        return redirect('/panel/bayar');
    }
}
