<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;


Route::get('/', [index::class, 'index'])->name('home');
