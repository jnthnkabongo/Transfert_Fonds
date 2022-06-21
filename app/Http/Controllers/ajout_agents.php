<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajout_agents extends Controller
{
    public function ajout_agents(){
        return view('pages.ajout_agent');
    }
}
