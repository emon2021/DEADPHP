<?php

use App\Core\Route;
use App\Http\Controllers\Controller;

/**
 *  default route for welcome page
 */
Route::get('/',function(){
    Route::view('welcome');
});



Route::get('/contact','contact');
Route::get('/contact1',[Controller::class,'contact']);



