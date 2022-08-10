<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class retrait extends Controller
{
    public function retrait(){

        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/listRetrait')->json();
            $tableau = $response['data'];
            return view('pages.retrait', compact('tableau'));
        } catch (\Throwable $th) {
            dd('erreur'. $th);
        }
    }
}
