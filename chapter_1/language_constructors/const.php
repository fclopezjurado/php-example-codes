<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 22/10/18
 * Time: 17:38
 *
 * Constants differ from normal variables in that you don't use the $ symbol to declare or use them. The default
 * visibility of class constants is public.
 * https://secure.php.net/manual/en/language.oop5.constants.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant()
    {
        echo self::CONSTANT . PHP_EOL;
    }
}

echo MyClass::CONSTANT . PHP_EOL;

$classname = 'MyClass';
echo $classname::CONSTANT . PHP_EOL; // As of PHP 5.3.0

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT . PHP_EOL; // As of PHP 5.3.0