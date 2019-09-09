<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarPertanyaan extends Model
{
    public function pertanyaanmanys()
    {
        return $this->hasMany('App\DaftarPertanyaan');
    }
    public function pertanyaans()
    {
        return $this->belongsTo('App\Apl02');
    }
}
