<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Apl01;

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

    public function detail_pembayaran()
    {
        return view('panel.detail-pembayaran');
    }

    public function bukti_pendaftaran()
    {
        $user = Apl01::where('user_id', Auth::user()->id)->first();
        return view('panel.bukti-pendaftaran', compact('user'));
    }
}
