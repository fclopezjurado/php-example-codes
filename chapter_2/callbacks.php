<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 17:26
 *
 * https://secure.php.net/manual/en/language.types.callable.php
 *
 * Some functions like call_user_func() or usort() accept user-defined callback functions as a parameter.
 *
 * A PHP function is passed by its name as a string. Any built-in or user-defined function can be used, except
 * language constructs such as: array(), echo, empty(), eval(), exit(), isset(), list(), print or unset().
 *
 * A method of an instantiated object is passed as an array containing an object at index 0 and the method name at
 * index 1. Accessing protected and private methods from within a class is allowed.
 *
 * Static class methods can also be passed without instantiating an object of that class by passing the class name
 * instead of an object at index 0. As of PHP 5.2.3, it is also possible to pass 'ClassName::methodName'.
 *
 * Apart from common user-defined function, anonymous functions can also be passed to a callback parameter.
 */

function my_callback_function()
{
    var_dump('hello world!');
}

class MyClass1
{
    static function myCallbackMethod()
    {
        var_dump('Hello World!');
    }
}

/**
 * Type 1: Simple callback
 */
call_user_func('my_callback_function');

/**
 * Type 2: Static class method call
 */
call_user_func(array('MyClass1', 'myCallbackMethod'));

/**
 * Type 3: Object method call
 */
$obj = new MyClass1();
call_user_func(array($obj, 'myCallbackMethod'));

/**
 * Type 4: Static class method call (As of PHP 5.2.3)
 */
call_user_func('MyClass1::myCallbackMethod');

/**
 * Type 5: Relative static class method call (As of PHP 5.3.0)
 */
class A1
{
    public static function who()
    {
        var_dump('A1');
    }
}

class B1 extends A1
{
    public static function who()
    {
        var_dump('B1');
    }
}

call_user_func(array('B1', 'parent::who'));

/**
 * Type 6: Objects implementing __invoke can be used as callables (since PHP 5.3)
 */
class C
{
    public function __invoke($name)
    {
        var_dump('Hello ', $name);
    }
}

$c = new C();
call_user_func($c, 'PHP!');