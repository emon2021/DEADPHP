<?php

namespace App\Core;

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


    /**
     * @ run() method location is in the 'App\Core\Application' class
     * @ run() method should call after calling global methods like % get, post,put,patch,delete %
     * @ run() method call the reslove method
     */

    //  resolve
    public static function resolve()
    {
        $path = self::$request->getPath();
        $method = self::$request->getMethod();
        //  getting the callback from the routes array
        $callback = self::$routes[$method][$path] ?? false; // $routes = [$method][$path]

        if($callback == false)
        {
            Response::setStatusCode(404);
            return "<h1>404 | Not Found</h1>";
        }
        if(is_string($callback))
        {
            self::view($callback);
            return;
        }
        if(is_array($callback))
        {
            $callback[0] = new $callback[0]();
        }




        /**
         * {{  
         * 
         *  $callback = $routes[$method][$path] = $callback which is from ->
         *  get,post,put,patch,delete method...
         * 
         *  }}
         */

        return call_user_func($callback);
       
    }

    public static function view($view)
    {
        return include_once __DIR__."/../views/$view.php";
    }
}
