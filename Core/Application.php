<?php

namespace App\Core;

class Application
{
    public Request $request;
    public Route $route;
    /**
     * Class constructor.
     */
    public function __construct()
    {   
         $this->request = new Request();
         $this->route = new Route($this->request);
    }

    

    public function run()
    {
        $this->route->resolve();
    }
}