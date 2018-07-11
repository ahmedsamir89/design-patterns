<?php

class Singleton
{

    /** @var \stdClass */
    protected static $object;


    private function __construct(){}

    /**
     * @return mixed
     * @author Ahmed Samir <ahmed.samir@tajawal.com>
     */
    public static function createInstance(): stdClass
    {
        if(empty(static::$object)) {
            static::$object = new \stdClass();
        }

        return static::$object;
    }

}