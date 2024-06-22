<?php

namespace App\Core;
use App\Core\Request;

class Route
{
    public static Request $request;
    protected static array $routes = [];
    public Application $app;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        self::$request = new Request();
    }




    public static function get($path, $callback)
    {
        return self::$routes['get'][$path] = $callback;
    }

    //  resolve
    public function resolve()
    {
        $path = self::$request->getPath();
        $method = self::$request->getMethod();
        $callback = self::$routes[$method][$path] ;
        echo "<pre>";
         var_dump($callback);
        echo "</pre>";
        if($callback == false)
        {
            echo "Not Found";
        }

        
        return call_user_func($callback, self::$request);
       
       

        
    }
}