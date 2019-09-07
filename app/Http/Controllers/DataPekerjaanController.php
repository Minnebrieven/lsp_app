<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data_pekerjaan_sekarang;

class DataPekerjaanController extends Controller
{
    public function get_all()
    {
        $pekerjaan = Data_pekerjaan_sekarang::find();
        return view('admin.data_pekerjaan')->with('pekerjaan', $pekerjaan);
    }

    public function add_data_pekerjaan()
    {
        return view('admin.data_pekerjaan.add');
    }

    public function data_pekerjaan_save(Request $r)
    {
        $pekerjaan = new Data_pekerjaan_sekarang();
        $pekerjaan->user_id = $r->input('user_id');
        $pekerjaan->apl_id = $r->input('apl_id');
        $pekerjaan->nama_perusahaan = $r->input('nama_perusahaan');
        $pekerjaan->jabatan = $r->input('jabatan');
        $pekerjaan->alamat = $r->input('alamat');
        $pekerjaan->no_telp = $r->input('no_telp');
        $pekerjaan->fax = $r->input('fax');
        $pekerjaan->email = $r->input('email');
        $pekerjaan->save();

        redirect(url('admin/data_pekerjaan'));
    }

    public function edit_data_pekerjaan($id)
    {
        $pekerjaan = Data_pekerjaan_sekarang::find($id);
        return view('admin.data_pekerjaan.edit')->with('pekerjaan',$pekerjaan);
    }

    public function update_data_pekerjaan(Request $r)
    {
        $pekerjaan = Data_pekerjaan_sekarang::find($r->input('id'));
        $pekerjaan->user_id = $r->input('user_id');
        $pekerjaan->apl_id = $r->input('apl_id');
        $pekerjaan->nama_perusahaan = $r->input('nama_perusahaan');
        $pekerjaan->jabatan = $r->input('jabatan');
        $pekerjaan->alamat = $r->input('alamat');
        $pekerjaan->no_telp = $r->input('no_telp');
        $pekerjaan->fax = $r->input('fax');
        $pekerjaan->email = $r->input('email');
        $pekerjaan->save();

        redirect(url('admin/data_pekerjaan'));
    }

    public function delete_pekerjaan($id)
    {
        $pekerjaan = Data_pekerjaan_sekarang::find($id);
        $pekerjaan->delete();

        return redirect(url('admin/data_pekerjaan'));
    }
}
