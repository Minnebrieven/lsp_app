<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuktiKelengkapanPemohon extends Model
{
    public function kelengkapanmanys()
    {
        return $this->hasMany('App\BuktiKelengkapanPemohon');
    }

    public function kelengkapans()
    {
        return $this->belongsTo('App\Apl01');
    }
}
