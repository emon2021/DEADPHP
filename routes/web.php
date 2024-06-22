<?php

use App\Core\Route; 
use App\Core\Application;

// echo Route::get('/contact', 'some');
$web = new Application();
 
// echo $web->resolve();



Route::get('/',function(){
    echo 'This is root path';
});
Route::get('/contact',function(){
    echo 'This is contact path';
});


$web->run();