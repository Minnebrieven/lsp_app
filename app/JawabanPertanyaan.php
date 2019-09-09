<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JawabanPertanyaan extends Model
{
    public function jawabans()
    {
        return $this->belongsTo('App\DaftarPertanyaan');
    }
}
