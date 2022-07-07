<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\testing\WithoutMiddleware;
use Tests\TestCase;

class login extends Controller
{
    public function login(){
        return view('pages.login');
    }

    public function connexion(Request $request){
        $email = $request->email;
        $password = $request->password;
        $response = Http::get("http://api-transfert.fastmoneytransfert.com/api/login_ad?email=".$email."&password=".$password);
        //$response = "192.168.75.143:82/api/login_ad?email=".$email."&password=".$password;
        //dd($response->status());
        if($response->ok()){
            dd('Bienvenue');
            return redirect()->route('home');
        }else{
            //dd('Les informations sont erronées');
            return redirect()->route('home');
        }
        /*if($response === true){
            dd('Bienvenue');
            }else{
            ($response ===  false);
            dd('Les informations sont fausses');
        }*/
    }
}
