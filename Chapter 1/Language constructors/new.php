<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 16:10
 *
 * To create an instance of a class, the new keyword must be used. An object will always be created unless the object
 * has a constructor defined that throws an exception on error. Classes should be defined before instantiation (and in
 * some cases this is a requirement).
 * https://secure.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{
}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);