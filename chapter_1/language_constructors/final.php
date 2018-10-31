<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 16/10/2018
 * Time: 17:03
 *
 * Prevents child classes from overriding a method.
 * If the class itself is being defined final then it cannot be extended.
 * https://secure.php.net/manual/en/language.oop5.final.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

class BaseClass
{
    public function test()
    {
        echo "BaseClass::test() called" . PHP_EOL;
    }

    final public function moreTesting()
    {
        echo "BaseClass::moreTesting() called" . PHP_EOL;
    }
}

class ChildClass extends BaseClass
{
    /**
     * Fatal error. Cannot override a final method.
     */
    /*public function moreTesting()
    {
        echo "ChildClass::moreTesting() called" . PHP_EOL;
    }*/
}

final class TestClass
{
    public function test()
    {
        echo "BaseClass::test() called" . PHP_EOL;
    }

    /**
     * Here it doesn't matter if you specify the function as final or not
     */
    final public function moreTesting()
    {
        echo "BaseClass::moreTesting() called" . PHP_EOL;
    }
}

/**
 * Class TestChildClass (Fatal error). Cannot extends of a final class.
 */
/*class TestChildClass extends TestClass
{
}*/