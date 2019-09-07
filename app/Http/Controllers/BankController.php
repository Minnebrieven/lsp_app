<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Bank;
use Illuminate\Support\Facades\Input;

class BankController extends Controller
{
    public function list_bank()
    {
        return view('admin.bank.list-bank');
    }
    
    public function tambah_bank()
    {
    	return view('admin.bank.tambah-bank');
    }

    public function proses_tambah_bank(Request $r)
    {
    	$tambah = new Bank;
    	$tambah->nama_bank = $r->nama_bank;
    	$tambah->no_rekening = $r->no_rekening;
    	$tambah->nama_pemilik = $r->nama_pemilik;
    	$tambah->logo_bank = $r->logo_bank;

    	if (Input::hasFile('logo_bank')) {
            $file = $r->file('logo_bank');
            $filename = $file->getClientOriginalName();
            Input::file('logo_bank')->move('logo_bank/', $filename);
            $tambah->logo_bank = $filename;
        }

    	$tambah->save();

    	return redirect('admin/tambah-bank')->with('sukses', 'Bank Berhasil Ditambah');
    }
}
