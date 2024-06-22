<?php

namespace App\Core;

class Route
{
    public static function get($path, $callback)
    {
        return $path." ".$callback;
    }

    public function resolve()
    {
        
    }
}