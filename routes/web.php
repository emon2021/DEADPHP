<?php

use App\Core\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;

/**
 *  default route for welcome page
 */
Route::get('/',function(){
    Route::view('welcome');
});



Route::get('/index',[HomeController::class,'index']);
Route::get('/contact',[Controller::class,'contact']);



