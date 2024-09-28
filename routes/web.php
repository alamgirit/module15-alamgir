<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

//Route::get(Uri: '/profile/{id}', [ProfileController::class, 'index']);


Route::get(uri: "/profile/{id}", action: [ProfileController::class,'index']);