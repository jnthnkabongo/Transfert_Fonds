<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class profil extends Controller
{
    public function profil(){
        return view('pages.profil');
    }
    public function afficheProfil(){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/profile')->json();
            $profiles = $response['data'];
            return view('header.headfoot', compact('profiles'));
        } catch (\Throwable $th) {
            dd('erreur'.$th);
        }
    }
    public function modProfil(){

    }
}
