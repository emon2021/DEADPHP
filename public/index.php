<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Core\Application;

$app = new Application();   //create an instance of Application class

require "../routes/web.php";







$app->run();    //call the run method




