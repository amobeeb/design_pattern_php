<?php

class Singleton
{
    
    private static $instances = null;

    public function __construct(){}

    public function __clone(){}

    public function __wakeup()
    {
        throw new \Exception("Cannot  unserialize singleton");
    }

    public static function getInstance()
    {
        //get the name of the subclass
        $subclass = static::class;
         
        if(!isset(self::$instances[$subclass])){
            self::$instances[$subclass] = new static();
        }
        return self::$instances[$subclass];
    }
}