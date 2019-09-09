<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
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

    public function delete_status_kelengkapan($id)
    {
        $kelengkapan = Status_kelengkapan::find($id);
        $kelengkapan->delete();

        return view(url('admin/status_kelengkapan'));
    }
}
