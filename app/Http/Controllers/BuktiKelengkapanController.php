<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuktiKelengkapanPemohon;

class BuktiKelengkapanController extends Controller
{
    public function get_all()
    {
        $bukti = BuktiKelengkapanPemohon::find();
        return view('admin.bukti.all', ["bukti"=>$bukti]);
    }

    public function bukti_kelengkapan_add()
    {
        return view('admin.bukti.add');
    }

    public function bukti_kelengkapan_edit($id)
    {
        $bukti = BuktiKelengkapanPemohon::find($id);
        return view('admin.bukti.edit', ["bukti"=>$bukti]);
    }

    public function bukti_kelengkapan_add_save(Request $r)
    {
        $bukti = new BuktiKelengkapanPemohon();
        $bukti->apl_id = $r->input('apl_id');
        $bukti->bukti_persyaratan = $r->input('bukti_persyaratan');
        $bukti->save();
        return redirect(url('admin/bukti'));
    }

    public function update_bukti_kelengkapan(Request $r)
    {
        $bukti = BuktiKelengkapanPemohon::find($id);
        $bukti->apl_id = $r->input('apl_id');
        $bukti->bukti_persyaratan = $r->input('bukti_persyaratan');
        $bukti->save();

        return redirect(url('admin/bukti'));
    }

    public function delete_bukti_kelengkapan($id)
    {
        $bukti = BuktiKelengkapanPemohon::find($id);
        $bukti->delete();
        return redirect(url('admin/bukti'));
    }
}
