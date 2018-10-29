<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 29/10/18
 * Time: 17:09
 *
 * Defines a named constant.
 * http://php.net/manual/en/function.define.php
 * Warning: While it is possible to define resource constants, it is not recommended and may cause unpredictable
 * behavior.
 * Returns true if constant was defined correctly, false if error.
 */

define("CONSTANT", "Hello world.");
var_dump(CONSTANT); # outputs "Hello world."
var_dump(Constant); # outputs "Constant" and issues a PHP notice.

define("GREETING", "Hello you.", true); # constant defined with case insensitive.
var_dump(GREETING); # outputs "Hello you."
var_dump(Greeting); # outputs "Hello you."

define('ANIMALS', array('dog', 'cat', 'bird'));
var_dump(ANIMALS[1]); # outputs "cat"

var_dump(define('test', 90)); # returns true

/**
 * Use of define inside a namespace generates a PHP warning.
 */
/*namespace Foo;
const AVOCADO = 6.02214086;
define(MOLE, 'hill');*/

/**
 * Referencing the constant we tried to define() results in a fatal error.
 */
/*namespace Bar;
echo \Foo\AVOCADO;
echo \Foo\MOLE;*/

/**
 * It's possible definition of a constant out of a namespace and a class and we use "constant"
 * function to print constant value.
 */
const MY_CONSTANT = 'test';
var_dump(constant('MY_CONSTANT'));