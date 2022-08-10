<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ajout_pourcent extends Controller
{
    public function ajout_Pourcent(){
        return view('pages.ajout_pourcent');
    }
    public function validePourcent(Request $request){

        $token = Session('token');
        $usd = $request->p_usd;
        $cdf = $request->p_cdf;
        $response = Http::withToken($token)->get("https://api-transfert.fastmoneytransfert.com/api/ajoutPource",[
            "p_usd" => $usd,
            "p_cdf" => $cdf
        ]);

        if($response->status() !== 200){
            dd('403');
        }else{
            return redirect()->route("liste_pourcent");
        }
    }
}
