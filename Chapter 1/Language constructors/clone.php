<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 15/10/2018
 * Time: 16:49
 *
 * Shallow copy of an object and all of properties.
 * https://secure.php.net/manual/en/language.oop5.cloning.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct()
    {
        $this->instance = ++self::$instances;
    }

    public function __clone()
    {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        /**
         * Force a copy of this->object, otherwise it will point to same object.
         */
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();
$obj->object1 = new SubObject();
$obj->object2 = new SubObject();
$obj2 = clone $obj;

print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);

$dateTime = new DateTime();
echo (clone $dateTime)->format('Y');