<?php

use App\Core\Route; 

/**
 *  default route for welcome page
 */
Route::get('/',function(){
    Route::view('welcome');
});



Route::get('/contact','contact');



