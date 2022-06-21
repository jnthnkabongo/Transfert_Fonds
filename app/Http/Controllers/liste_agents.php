<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liste_agents extends Controller
{
    public function liste_agents(){
        return view("pages.liste_agents");
    }
}
