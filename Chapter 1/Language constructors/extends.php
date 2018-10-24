<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 17:33
 *
 * A class can inherit the methods and properties of another class by using the keyword extends in the class
 * declaration.
 * https://secure.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.extends
 * Language constructor.
 */

class ExtendedClass
{
    protected function displayVar()
    {
        echo 'Parent class' . PHP_EOL;
    }
}

class ExampleClass extends ExtendedClass
{
    // Redefine the parent method
    function displayVar()
    {
        echo 'Extending class' . PHP_EOL;
        parent::displayVar();
    }
}

$extended = new ExampleClass();
$extended->displayVar();