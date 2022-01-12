<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArborcultureController extends Controller
{
    //
    public function arborculture(){
        return view('arborcultures/arborcultures');
    }
}
