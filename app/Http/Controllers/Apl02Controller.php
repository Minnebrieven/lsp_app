<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apl02;

class Apl02Controller extends Controller
{
    public function edit_apl02($id)
    {
        $apl02 = Apl02::find($id);
        return view('admin.apl02.edit')->with('apl02',$apl02);
    }

    public function update_apl02(Request $r)
    {
        
    }
}
