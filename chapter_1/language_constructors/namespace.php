<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 16:21
 *
 * Although any valid PHP code can be contained within a namespace, only the following types of code are affected by
 * namespaces: classes (including abstracts and traits), interfaces, functions and constants.
 * Namespaces are declared using the namespace keyword. A file containing a namespace must declare the namespace at
 * the top of the file before any other code - with one exception: the declare keyword.
 * https://secure.php.net/manual/en/language.namespaces.definition.php
 * Language constructor.
 */

namespace foo;
class Cat
{
    static function says() : void
    {
        echo 'meoow';
    }
}

namespace bar;
class Dog
{
    static function says() : void
    {
        echo 'ruff';
    }
}

namespace animate;
class Animal
{
    static function breathes() : void
    {
        echo 'air';
    }
}

namespace fub;

use bar\Dog;
use foo\Cat;
use animate\Animal;

echo Cat::says(), PHP_EOL;
echo Dog::says(), PHP_EOL;
echo Animal::breathes(), PHP_EOL;