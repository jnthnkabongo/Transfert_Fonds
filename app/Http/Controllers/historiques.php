<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class historiques extends Controller
{
    public function historiques(){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/historique')->json();
            $tableau = $response['data'];
            $status = $response['status'];

            switch ($status) {
                case 200 :
                    return view('pages.historiques', compact('tableau'));
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

}
