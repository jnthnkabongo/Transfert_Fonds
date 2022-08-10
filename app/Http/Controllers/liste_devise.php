<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class liste_devise extends Controller
{
    public function liste_devise(){
        try {
            $token = Session('token');
            $response = Http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/listeDevise')->json();
            $tableau = $response['data'];
            return view('pages.liste_devise', compact('tableau'));
        } catch (\Throwable $th) {
            dd('erreur'.$th);
        }
    }
    public function supprimer_devise($id){
        try {
            $token = Session('token');
            $response = http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/deleteDevise/'.$id);
            return redirect()->route('liste_devise');
        } catch (\Throwable $th) {
            dd('erreur'.$th);
        }
    }
    /*public function afficheModDev($id){
        $token = Session('token');
            $response = Http::withToken($token)->get('127.0.0.1:82/api/listeDevise/'.$id);
            $tableau = $response['data'];
            //return redirect()->route('mod_devise');
            return view('pages.mod_devise', compact('tableau'));
        try {


        } catch (\Throwable $th) {
            dd('erreur'.$th);
        }
    }*/
    public function deviseId($id){
        try {
            $token = Session('token');
            $response = http::withToken($token)->get('https://api-transfert.fastmoneytransfert.com/api/deviseId/'.$id);
            $tableau = $response['data'];
            dd($tableau['response']);
           // return view('pages.mod_devise', compact('tableau'));
        } catch (\Throwable $th) {
            dd('erreur'.$th);
        }
    }
}
