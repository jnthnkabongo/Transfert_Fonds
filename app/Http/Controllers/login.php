<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\testing\WithoutMiddleware;
use PhpParser\Node\Stmt\TryCatch;
use Tests\TestCase;
use Illuminate\Support\Facades\Session;

class login extends Controller
{
    public function login(){
        return view('pages.login');
    }

    public function connexion(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        //$response = Http::get("127.0.0.1:82/api/login_ad",[
        $response = Http::get("https://api-transfert.fastmoneytransfert.com/api/login_ad",[
            "email" => $email,
            "password" => $password
        ]);

        if($response->status() !== 200){
            $messages_erreur = $response['message'];
            return view('pages.login', compact('messages_erreur'));
        }else {
            session_start();
            Session::put('token', $response['access_token']);
            return redirect()->route("home");
        }
    }
    public function log_out(){
       try {
        $response = Http::get('127.0.0.1:82/api/logout_ad');
        if($response->status() !== 200){
            dd('403');
        }else{
            session_destroy();
            return redirect()->route('login');
        }
       } catch (\Throwable $th) {
        dd('erreur'. $th);
       }
    }
}
