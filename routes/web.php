<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\affectation;
use App\Http\Controllers\ajout_agences;
use App\Http\Controllers\ajout_agents;
use App\Http\Controllers\ajout_pays;
use App\Http\Controllers\ajout_pourcent;
use App\Http\Controllers\ajout_devise;
use App\Http\Controllers\depot;
use App\Http\Controllers\liste_agences;
use App\Http\Controllers\liste_pourcent;
use App\Http\Controllers\liste_agents;
use App\Http\Controllers\liste_pays;
use App\Http\Controllers\liste_devise;
use App\Http\Controllers\historiques;
use App\Http\Controllers\retrait;
use App\Http\Controllers\header2;
use App\Http\Controllers\login;
use App\Http\Controllers\mod_agence;
use App\Http\Controllers\mod_agent;
use App\Http\Controllers\mod_devise;
use App\Http\Controllers\mod_pays;
use App\Http\Controllers\mod_pourcent;
use App\Http\Controllers\profil;
use App\Http\Controllers\register;


//dashboad
Route::get('/header2', [header2::class, 'header2'])->name('header2');
Route::get('/home', [index::class, 'index'])->name('home');
Route::get('/compteur_retrait', [index::class, 'index'])->name('compteur_retrait');
Route::get('/compteur_retrait', [index::class, 'index'])->name('compteur_retrait');
Route::get('/profil', [profil::class, 'profil'])->name('profil');
Route::get('/afficheProfil',[afficheProfil::class, 'afficheProfil'])->name('afficheProfil');
Route::get('/modProfil', [modProfil::class, 'modProfil'])->name('modProfil');

//Parametres pays
Route::get('/ajoutPays', [ajout_pays::class, 'ajoutPays'])->name('ajoutPays');
Route::get('/validePays', [ajout_pays::class, 'validePays'])->name('validePays');
Route::get('/liste_pays',[liste_pays::class, 'liste_pays'])->name('liste_pays');
Route::get('/supprimer_pays/{id}',[liste_pays::class, 'supprimer_pays'])->name('supprimer_pays');
Route::get('/ajout_pays', [ajout_pays::class, 'ajout_pays'])->name('ajout_pays');
Route::get('/mod_pays',[mod_pays::class, 'mod_pays'])->name('mod_pays');

//Parametres agence
Route::get('/ajout_agences', [ajout_agences::class, 'ajout_agences'])->name('ajout_agences');
Route::get('/valideAgence', [ajout_agences::class, 'valideAgence'])->name('valideAgence');
Route::get('/liste_agences', [liste_agences::class, 'liste_agences'])->name('liste_agences');
Route::get('/supprimer_agence/{id}',[liste_agences::class, 'supprimer_agence'])->name('supprimer_agence');
Route::get('/mod_agence',[mod_agence::class, 'mod_agence'])->name('mod_agence');

//Parametres agent
Route::get('/ajout_agents', [ajout_agents::class, 'ajout_agents'])->name('ajout_agents');
Route::get('/create_agents', [ajout_agents::class, 'create_agents'])->name('create_agents');
Route::get('/valideAgent', [ajout_agents::class, 'valideAgent'])->name('valideAgent');
Route::get('/affectation', [affectation::class, 'affectation'])->name('affectation');
Route::get('/supprimer_agent/{id}',[liste_agents::class, 'supprimer_agent'])->name('supprimer_agent');
Route::get('/liste_agents', [liste_agents::class, 'liste_agents'])->name('liste_agents');
Route::get('/mod_agent',[mod_agent::class, 'mod_agent'])->name('mod_agent');

//Parametres pourcentage
Route::get('/ajout_pourcent', [ajout_pourcent::class, 'ajout_pourcent'])->name('ajout_pourcent');
Route::get('/liste_pourcent', [liste_pourcent::class, 'liste_pourcent'])->name('liste_pourcent');
Route::get('/supprimer_pourcent/{id}',[liste_pourcent::class, 'supprimer_pourcent'])->name('supprimer_pourcent');
Route::get('validePourcent', [ajout_pourcent::class, 'validePourcent'])->name('validePourcent');
Route::get('/mod_pourcent',[mod_pourcent::class, 'mod_pourcent'])->name('mod_pourcent');
Route::get('/affichemod_pourcent/{id}',[mod_pourcent::class, 'affichemod_pourcent'])->name('affichemod_pourcent');

//devise
Route::get('/ajout_devise', [ajout_devise::class, 'ajout_devise'])->name('ajout_devise');
Route::get('/valideDevise', [ajout_devise::class, 'valideDevise'])->name('valideDevise');
Route::get('/affiche_formulaire', [ajout_devise::class, 'affiche_formulaire'])->name('affiche_formulaire');
Route::get('/supprimer_devise/{id}',[liste_devise::class, 'supprimer_devise'])->name('supprimer_devise');
Route::get('/liste_devise',[liste_devise::class, 'liste_devise'])->name('liste_devise');
//Route::get('/liste_devise',[liste_devise::class, 'liste_devise'])->name('liste_devise');
Route::get('/mod_devise',[mod_devise::class, 'mod_devise'])->name('mod_devise');
Route::get('/valideModDev', [mod_devise::class, 'valideModDev'])->name('valideModDev');
Route::get('/afficheModDev/{id}', [mod_devise::class, 'afficheModDev'])->name('afficheModDev');
Route::get('/deviseId/{id}', [liste_devise::class, 'deviseId'])->name('deviseId');

//Parametres depot
Route::get('/depot', [depot::class, 'depot'])->name('depot');

//Parametres retrait
Route::get('/retrait', [retrait::class, 'retrait'])->name('retrait');

//historique
Route::get('/historiques', [historiques::class, 'historiques'])->name('historiques');

//Parametres connexion
Route::get('/', [login::class, 'login'])->name('login');
Route::get('/connexion', [login::class, 'connexion'])->name('connexion');
Route::get('/register', [register::class, 'register'])->name('register');
Route::get('/log_out',[login::class, 'log_out'])->name('log_out');
