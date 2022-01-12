<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CivicController extends Controller
{
    //
    public function civic(){
        return view(' civics/civics');
    }
}
