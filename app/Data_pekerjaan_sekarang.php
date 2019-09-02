<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_pekerjaan_sekarang extends Model
{
    public function pekerjaans()
    {
        return $this->belongsTo('App\Apl01');
    }
}
