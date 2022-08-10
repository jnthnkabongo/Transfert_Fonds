<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class ajout_agents extends Controller
{
    public function ajout_agents(){
        return view('pages.ajout_agent');
    }

    public function valideAgent(Request $request){

        $token = Session('token');
        $matricule = $request->matricule;
        $nom = $request->nom;
        $prenom = $request->prenom;
        $sexe = $request->sexe;
        $phone = $request->phone;
        $email = $request->email;
        $password = $request->password;
        $response = Http::withToken($token)->get("https://api-transfert.fastmoneytransfert.com/api/createAgent",[
            "matricule" => $matricule,
            "nom" => $nom,
            "prenom" => $prenom,
            "sexe" => $sexe,
            "phone" => $phone,
            "email" => $email,
            "password" => $password
        ]);

        if($response->status() !== 200){
            dd('403');
        }else {
            return redirect()->route("liste_agents");
        }
    }
}
