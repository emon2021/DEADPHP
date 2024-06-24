<?php

use App\Core\Route; 



Route::get('/',function(){
    echo 'This is root path';
});
Route::get('/contact',function(){
    echo 'This is contact path';
});



