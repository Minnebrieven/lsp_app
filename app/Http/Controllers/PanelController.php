<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
