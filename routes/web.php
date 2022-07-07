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
use App\Http\Controllers\register;



Route::get('/home', [index::class, 'index'])->name('home');
Route::get('/affectation', [affectation::class, 'affectation'])->name('affectation');
Route::get('/ajout_agences', [ajout_agences::class, 'ajout_agences'])->name('ajout_agences');
Route::get('/ajout_agents', [ajout_agents::class, 'ajout_agents'])->name('ajout_agents');
Route::get('/ajout_pays', [ajout_pays::class, 'ajout_pays'])->name('ajout_pays');
Route::get('/ajout_pourcent', [ajout_pourcent::class, 'ajout_pourcent'])->name('ajout_pourcent');
Route::get('/ajout_devise', [ajout_devise::class, 'ajout_devise'])->name('ajout_devise');
Route::get('/depot', [depot::class, 'depot'])->name('depot');
Route::get('/liste_agences', [liste_agences::class, 'liste_agences'])->name('liste_agences');

/*  La gestion des agents càd la liste des agent la création des agents */
Route::get('/liste_agents', [liste_agents::class, 'liste_agents'])->name('liste_agents');
Route::get('/create_agents', [liste_agents::class, 'create_agents'])->name('liste_agents');
// La fin de la gestion des agents //

Route::get('/liste_pourcent', [liste_pourcent::class, 'liste_pourcent'])->name('liste_pourcent');
Route::get('/liste_pays',[liste_pays::class, 'liste_pays'])->name('liste_pays');
Route::get('/liste_devise',[liste_devise::class, 'liste_devise'])->name('liste_devise');
Route::get('/historiques', [historiques::class, 'historiques'])->name('historiques');
Route::get('/retrait', [retrait::class, 'retrait'])->name('retrait');
Route::get('/header2', [header2::class, 'header2'])->name('header2');
Route::get('/', [login::class, 'login'])->name('login');
Route::get('/connexion', [login::class, 'connexion'])->name('connexion');
Route::get('/register', [register::class, 'register'])->name('register');
