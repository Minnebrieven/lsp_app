<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitKompetensi extends Model
{
    public function units()
    {
        return $this->belongsTo('Apl01');
    }
}
