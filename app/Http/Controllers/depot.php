<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class depot extends Controller
{
    public function depot(){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/listeDepots')->json();
            $tableau = $response['data'];
            return view('pages.depot', compact('tableau'));
        } catch (\Throwable $th) {
            dd('erreur'.$th);
        }
    }
}
