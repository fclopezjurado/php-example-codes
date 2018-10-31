<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 12:53
 *
 * Used to determine whether a PHP variable is an instantiated object of a certain class.
 * https://secure.php.net/manual/en/language.operators.type.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

class MyClass
{
}

class NotMyClass
{
}

$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);

class ParentClass
{
}

class MyClass2 extends ParentClass
{
}

$a = new MyClass2;

var_dump($a instanceof MyClass2);
var_dump($a instanceof ParentClass);

class MyClass3
{
}

$a = new MyClass3;
var_dump(!($a instanceof stdClass));

interface MyInterface
{
}

class MyClass4 implements MyInterface
{
}

$a = new MyClass4;
$b = new MyClass4;
$c = 'MyClass';
$d = 'NotMyClass';

var_dump($a instanceof $b); // $b is an object of class MyClass
var_dump($a instanceof $c); // $c is a string 'MyClass'
var_dump($a instanceof $d); // $d is a string 'NotMyClass'

$a = 1;
$b = NULL;

/**
 * Fatal error.
 */
$c = imagecreate(5, 5);
var_dump($a instanceof stdClass); // $a is an integer
var_dump($b instanceof stdClass); // $b is NULL
var_dump($c instanceof stdClass); // $c is a resource

/**
 * Fatal error.
 */
//var_dump(false instanceof stdClass);