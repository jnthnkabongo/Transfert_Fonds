<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ajout_pays extends Controller
{

     public function ajoutPays(){

        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/profile')->json();
            $profiles = $response['data'];
            return view('pages.ajoutePays', compact('profiles'));
        } catch (\Throwable $th) {
            dd('erreur'.$th);
        }
     }

    public function validePays(Request $request){

        $token = Session('token');
        $nom_pays = $request->nom_pays;
        $code_pays = $request->code_pays;
        $response = Http::withToken($token)->get("https://api-transfert.fastmoneytransfert.com/api/createPays",[
            "nom" => $nom_pays,
            "code_pays" => $code_pays
        ]);

        if($response->status() !== 200){
            dd('403');
        }else {
            return redirect()->route("liste_pays");
        }
    }
}
