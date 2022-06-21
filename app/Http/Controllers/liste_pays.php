<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liste_pays extends Controller
{
    public function liste_pays(){
        return view('pages.liste_pays');
    }
}

