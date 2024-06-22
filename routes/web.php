<?php

use App\Core\Route; 

// echo Route::get('/contact', 'some');

 
// echo $web->resolve();



Route::get('/',function(){
    echo 'This is root path';
});
Route::get('/contact',function(){
    echo 'This is contact path';
});


