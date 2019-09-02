<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_kelengkapan extends Model
{
    public function statuskelengkapans()
    {
        return $this->belongsTo('App\BuktiKelengkapanPemohon');
    }
}
