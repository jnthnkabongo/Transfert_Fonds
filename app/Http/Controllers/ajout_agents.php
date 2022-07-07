<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ajout_agents extends Controller
{
    public function ajout_agents(){
        return view('pages.ajout_agent');
    }
    public function create_agents(Request $request){
        $matricule = $request->matricule;
        $nom = $request-> nom;
        $prenom = $request-> prenom;
        $sexe = $request-> sexe;
        $phone = $request-> phone;
        $email = $request-> email;
        $mdp = $request-> mdp;

        $reponse = Http::get("127.0.0.1/api/createAgent?matricule=".$matricule. "&nom=".$nom."&prenom".$prenom."&sexe".$sexe."&phone".$phone."&email".$email."&mdp".$mdp);
        if($reponse->ok()){
           // dd('Okay');
           //alert('Bien');
            return redirect()->route('liste_agents');
        }else{
           // dd('Mauvaise nouvelle');
        }
    }


}
