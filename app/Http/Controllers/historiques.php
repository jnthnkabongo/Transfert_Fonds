<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historiques extends Controller
{
    public function historiques(){
        return view('pages.historiques');
    }

}
