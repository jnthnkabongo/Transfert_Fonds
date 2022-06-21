<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liste_agences extends Controller
{
    public function liste_agences(){
        return view('pages.liste_agences');
    }
}
