<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuktiKompetensiRelevan extends Model
{
    public function kompetensirelevanmanys()
    {
        return $this->hasMany('App\BuktiKelengkapanPemohon');
    }
    
    public function kompetensirelevans()
    {
        return $this->belongsTo('App\Apl01');
    }
}
