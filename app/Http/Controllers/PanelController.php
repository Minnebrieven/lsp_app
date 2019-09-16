<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Apl01;
use \App\Transaksi;
use Illuminate\Support\Facades\Input;

class PanelController extends Controller
{
    public function index()
    {
    	return view('panel.index');
    }

    public function apl1()
    {
    	return view('panel.form-apl1');
    }

    public function apl2()
    {
        return view('panel.form-apl2');
    }

    public function bayar()
    {
        return view('panel.bayar');
    }

    public function bukti_pembayaran()
    {
    	return view('panel.bukti-pembayaran');
    }

    public function detail_pembayaran(Request $r, $nomor_sertifikasi)
    {

        $bayar = \App\Apl01::where('nomor_sertifikasi', $nomor_sertifikasi)->first();
        $bank = \App\Bank::all();
        $status = \App\Transaksi::where('nomor_sertifikasi', $nomor_sertifikasi)->first();
        return view('panel.detail-pembayaran', compact('bayar', 'bank', 'status'));
    }

    public function bukti_pendaftaran()
    {
        $user = Apl01::where('user_id', Auth::user()->id)->first();
        return view('panel.bukti-pendaftaran', compact('user'));
    }

    public function bayar_sertifikasi(Request $r)
    {
        $bayar = new Transaksi;
        $bayar->user_id = Auth::user()->id;
        $bayar->harga = $r->harga;
        $bayar->tanggal = $r->tanggal;
        $bayar->nomor_sertifikasi = $r->nomor_sertifikasi;
        $bayar->metode = $r->metode;
        $bayar->nomor_rekening = $r->nomor_rekening;
        $bayar->status = 'BELUM LUNAS';
        $bayar->invoice = $r->invoice;

        if (Input::hasFile('bukti')) {
            $file = $r->file('bukti');
            $filename = $file->getClientOriginalName();
            Input::file('bukti')->move('bukti/', $filename);
            $bayar->bukti = $filename;
        }
        $bayar->save();

        return redirect('/panel/bukti-pembayaran');
    }
}
