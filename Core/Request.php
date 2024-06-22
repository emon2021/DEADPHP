<?php
namespace App\Core;

class Request
{
    public function getPath()
    {
        $path = $_SERVER["REQUEST_URI"] ?? "/";
        $position = strpos($path,"?");  // getting position of ?
        if($position)
        {
            $path = substr($path,0,$position); // getting path before ? 
            return $path;   
        }
        return $path;
    }

    //  get method
    public function getMethod()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }
}