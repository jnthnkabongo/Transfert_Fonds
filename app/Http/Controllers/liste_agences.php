<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class liste_agences extends Controller
{
    public function liste_agences(){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/listAgence')->json();
            $tableau = $response['data'];
            $status = $response['status'];

            switch ($status) {
                case 200 :
                    return view('pages.liste_agences', compact('tableau'));
                    break;
                    case 401 :
                        return view('pages.500');
                        break;
                default:
                    # code...
                    break;
            }
        } catch (\Throwable $th) {
            return view('pages.500');
        }
    }
    public function supprimer_agence($id){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/deleteAgence/'.$id);
            return redirect()->route('liste_agences');
        } catch (\Throwable $th) {
            dd("introuvable".$th);
        }
    }
}
