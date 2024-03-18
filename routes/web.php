<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class,"home"]);

Route::prefix('backend')->group(function(){
    Route::get('/',[LoginController::class,"login"]);
    // Route::get('/product',[Controller::class,"home"]);
});

