<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class liste_agents extends Controller
{
    public function liste_agents(){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/listAgent')->json();
            $tableau = $response['data'];
            $status = $response['status'];

            switch ($status) {
                case 200 :
                    return view('pages.liste_agents', compact('tableau'));
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
    public function supprimer_agent($id){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->delete('https://api-transfert.fastmoneytransfert.com/api/deleteAgent/'.$id);
            return redirect()->route('liste_agents');
        } catch (\Throwable $th) {
            dd("introuvable".$th);
        }
    }

}
