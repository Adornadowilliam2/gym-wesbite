<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
Route::get('/', function () {
    return view('pages.home');
});

Route::get("/register",[WebController::class,'register'])->name('register');

route::post("/register",[WebController::class,'registerPost']);

Route::get("/login",[WebController::class,'login'])->name('login');
Route::post("/login",[WebController::class,'loginPost']);

Route::get("/about", [WebController::class, 'about'])->name('about');
Route::get("/contact", [WebController::class, 'contact'])->name('contact');
Route::post("/transaction", [WebController::class, 'transaction'])->name('transaction');

Route::post("/logout", [WebController::class, 'logout'])->name('logout');