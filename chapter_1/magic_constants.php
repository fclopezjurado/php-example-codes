<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 29/10/18
 * Time: 11:45
 *
 * Magic constants.
 * https://secure.php.net/manual/en/language.constants.predefined.php
 */

namespace NamespaceTest;

trait MyTrait
{
    public function traitFunction() {
        var_dump(__TRAIT__);
        var_dump(__METHOD__);
        var_dump(__FUNCTION__);
    }
}

class MyClass1
{
    use MyTrait;

    public function classFunction()
    {
        var_dump(__CLASS__);
        var_dump(__METHOD__);
        var_dump(__FUNCTION__);
    }
}

$myClass1Object = new MyClass1();

var_dump(__LINE__);
var_dump(__FILE__);
var_dump(__DIR__);
var_dump(__NAMESPACE__);

$myClass1Object->classFunction();
$myClass1Object->traitFunction();
