<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 16:45
 *
 * Lambda functions are anonymous functions that can be stored as a variable.
 * https://php.net/manual/en/class.closure.php
 * We can see that in PHP lambdas and closures are implemented as objects instantiated from the Closure class.
 */

/**
 * @param $a
 * @param $b
 */
$lambda = function ($a, $b) {
    echo $a + $b;
};

var_dump(gettype($lambda));
var_dump((int)is_callable($lambda));
var_dump(get_class($lambda));

$string = 'Hello World!';
$closure = function () use ($string) {
    var_dump($string);
};

$closure();

/**
 * Early binding (default). We know the value and type of the variable before we use it at runtime.
 */
$a = 'some string';
$b = function () use ($a) {
    var_dump($a);
};
$a = "Hello World";
$b();

/**
 * Late binding (reference). We do not know what the variable type or value is until we call the closure.
 * PHP will coerce the variable to a specific type and value when it needs to operate on it
 */
$a = "some string";
$b = function () use (&$a) {
    var_dump($a);
};
$a = "Hello World";
$b();

class Animal
{
    protected $nature = 'Sadly';

    public function getClosure()
    {
        $boundVariable = 'Animal';

        return function () use ($boundVariable) {
            return $this->nature . ' ' . $boundVariable;
        };
    }
}

class Cat extends Animal
{
    protected $nature = 'Awesome';
}

class Dog extends Animal
{
    protected $nature = 'Friendly';
}

/**
 * Closure class has two methods — bind and bindTo — and they allow you to change the scope to which the variable is
 * bound:
 */
$cat = new Cat;
$closure = $cat->getClosure();
var_dump($closure); // Awesome Animal
$closure = $closure->bindTo(new Dog);
var_dump($closure); // Friendly Animal

/**
 * Self-Executing Closures.
 */
(function () {
    var_dump('Self-executing anonymous function');
    var_dump($definedInClosure = 'Variable set');
})();
var_dump(isset($definedInClosure)); // bool(false)