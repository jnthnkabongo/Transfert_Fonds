<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajout_agences extends Controller
{
    public function ajout_agences(){
        return view("pages.ajout_agences");
    }
}
