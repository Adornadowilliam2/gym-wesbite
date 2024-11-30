<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::middleware('auth:passport')->get('/checktoken', [WebController::class, 'checkToken'])->name('checktoken');