<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liste_devise extends Controller
{
    public function liste_devise(){
        return view('pages.liste_devise');
    }
}
