<?php

namespace App\Core;

class Application
{
    public Request $request;
    public static Route $route;
    /**
     * Class constructor.
     */
    public function __construct()
    {   
         $this->request = new Request();
         self::$route = new Route($this->request);
    }

    

    public function run()
    {
        return self::$route->resolve();
    }
}