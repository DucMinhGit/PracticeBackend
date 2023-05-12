<?php

class Str
{
    private static $methods = [
        'upper' => 'strtoupper',
        'lower' => 'strtolower',
        'len' => 'strlen'
    ];

    public static function __callStatic(string $method, array $parameters)
    {
        if(!in_array($method, array_keys(self::$methods)))
        {   
            throw new Exception('The ' . $method . ' is not supported.');
        }

        return call_user_func_array(self::$methods[$method], $parameters);
    }
}