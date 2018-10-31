<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 17:17
 *
 * In order to maintain backward compatibility with PHP 4, PHP 5 will still accept the use of the keyword var in
 * property declarations instead of (or in addition to) public, protected, or private. However, var is no longer
 * required. In versions of PHP from 5.0 to 5.1.3, the use of var was considered deprecated and would issue an
 * E_STRICT warning, but since PHP 5.1.3 it is no longer deprecated and does not issue the warning.
 *
 * If you declare a property using var instead of one of public, protected, or private, then PHP 5 will treat the
 * property as if it had been declared as public.
 * https://secure.php.net/manual/en/language.oop5.properties.php
 * Language constructor.
 */

class SimpleClass
{
    var $test;

    public function __construct()
    {
        $this->test = 'test';
    }
}

$test = new SimpleClass();
var_dump($test->test);