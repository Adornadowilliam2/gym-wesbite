<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
Route::get('/', function () {
    return view('pages.home');
});

Route::get("/register",[WebController::class,'register'])->name('register');
route::post("/register",[WebController::class,'registerPost']);
Route::get("/login",[WebController::class,'login'])->name('login');
