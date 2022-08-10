<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ajout_devise extends Controller
{
    public function affiche_formulaire(){
        return view('pages.ajout_devise');
    }

    public function valideDevise(Request $request){
        $token = Session('token');
        $devise = $request->intitule;
        $response = Http::withToken($token)->get("https://api-transfert.fastmoneytransfert.com/api/ajoutDevise",[
            "intitule" => $devise
        ]);

        if($response->status() !== 200){
            dd('403');
        }else {
            return redirect()->route("liste_devise");
            //dd($response['access_token'])
        }
    }

}
