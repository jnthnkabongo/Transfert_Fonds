<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liste_pourcent extends Controller
{
    public function liste_pourcent(){
        return view('pages.liste_pourcent');
    }
}
