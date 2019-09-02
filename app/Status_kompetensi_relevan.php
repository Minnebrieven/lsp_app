<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_kompetensi_relevan extends Model
{
    public function statusrelevans()
    {
        return $this->belongsTo('App\BuktiKompetensiRelevan');
    }
}
