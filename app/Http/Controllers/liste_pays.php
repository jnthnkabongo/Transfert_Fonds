<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class liste_pays extends Controller
{
    public function liste_pays(){
        try {
           $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/listPays')->json();
            $tableau = $response['data'];
            $status = $response['Status'];

            switch ($status) {
                case 200 :
                    return view('pages.liste_pays', compact('tableau'));
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
    public function supprimer_pays($id){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->delete('https://api-transfert.fastmoneytransfert.com/api/deletePays/'.$id);
            return redirect()->route('liste_pays');
        } catch (\Throwable $th) {
            dd("introuvable".$th);
        }
    }

}

