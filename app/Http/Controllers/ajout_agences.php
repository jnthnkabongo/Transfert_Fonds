<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ajout_agences extends Controller
{
    public function ajout_agences(){
        return view('pages.ajout_agences');
    }

    public function valideAgence(Request $request){

        $token = Session('token');
        $nom_agence = $request->nom_agence;
        $adresse = $request->adresse;
        $phone_service = $request->phone_service;
        $id_pays = $request->id_pays;
        $response = Http::withToken($token)->get("https://api-transfert.fastmoneytransfert.com/api/ajoutAgence",[
            "nom_agence" => $nom_agence,
            "adresse" => $adresse,
            "phone_service" => $phone_service,
            "id_pays" => $id_pays
        ]);

        if($response->status() !== 200){
            dd('403');
        }else {
            return redirect()->route("liste_agences");
        }
    }
}


 /* try {
            $token = Session();
            $id_pays = Http::withToken($token)->get('127.0.0.1:82/api/listPays')->json();
            $tableau = $id_pays['data'];
            return view('pages.ajout_agences', compact('tableau'));
        } catch (\Throwable $th) {
            dd('erreur'.$th);
        }
    }*/


