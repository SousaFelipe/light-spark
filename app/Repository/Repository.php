<?php
namespace App\Repository;


class Repository
{
    private static $instance = null;



    protected static function bind($class)
    {
        if (static::$instance === null) {
            static::$instance = new $class;
        }

        return static::$instance;
    }
}