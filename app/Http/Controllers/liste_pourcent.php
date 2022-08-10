<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class liste_pourcent extends Controller
{
    public function liste_pourcent(){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/listPource')->json();
            $tableau = $response['data'];
            $status = $response['status'];

            switch ($status) {
                case 200 :
                    return view('pages.liste_pourcent', compact('tableau'));
                    break;
                case 401 :
                    return view('pages.500');
                    break;
                default:
                    break;
            }
        } catch (\Throwable $th) {
            return view('pages.500');
        }
    }
    public function supprimer_pourcent($id){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->delete('https://api-transfert.fastmoneytransfert.com/api/deletePourcent/'.$id);
            return redirect()->route('liste_pourcent');
        } catch (\Throwable $th) {
            dd("introuvable".$th);
        }
    }
    public function affichemod_pourcent($id){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/listPource/'.$id);
            return redirect()->route('mod_pourcent');
        } catch (\Throwable $th) {
            dd("introuvable".$th);
        }
    }
}
