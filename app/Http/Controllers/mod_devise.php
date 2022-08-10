<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class mod_devise extends Controller
{
    public function mod_devise(){
        return view('pages.mod_devise');
    }
   public function afficheModDev($id){
    try {
        $token = Session('token');
        $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/deviseId/'.$id)->json();
        $tableau = $response['datas'];
        return view('pages.mod_devise', compact('response'));
    } catch (\Throwable $th) {
        dd('erreur'.$th);
    }
   }

    public function valideModDev(Request $request){

        $token = Session('token');
        $intitule = $request->intitule;

        $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/updateDevise/',[
            "intitule" =>$intitule
        ]);
        if($response->status() !== 200){
            dd('403');
        }else{
            return redirect()->route("liste_devise");
        }
    }

}
