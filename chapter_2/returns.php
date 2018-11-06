<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 16:23
 */

/**
 * PHP will return NULL if you do not specify a return value.
 * If the function is going to return null, you can specify that it will return "void".
 * @param string $parameter
 */
function test(string $parameter): void
{
    var_dump($parameter);
}

/**
 * Because PHP is in coercive mode by default, it converts the integer 123 to a string when it returns from the
 * function.
 * @param string $firstName
 * @param string $lastName
 * @return string
 */
function getFullName(string $firstName, string $lastName): string
{
    return 123;
}

/**
 * Class Fruit. Returns by reference.
 * When using the first method, you can make changes to the returned value and those changes will not be reflected
 * inside the private property of Fruit because you are actually modifying a copy of the property's value.
 * When using the second method, you are in fact getting back an alias for Fruit::$color -- a different name by which
 * you refer to the same variable. So if you do anything with it (including modifying its contents) you are in fact
 * directly performing the same action on the value of the property.
 */
class Fruit
{
    private $color = "red";

    public function getColor()
    {
        return $this->color;
    }

    public function &getColorByRef()
    {
        return $this->color;
    }
}


$name = getFullName('Mary', 'Moon');
$fruit = new Fruit();
$color = &$fruit->getColorByRef();

var_dump(test('test'));
var_dump($name);
var_dump($fruit->getColor());

$color = 'white';
var_dump($fruit->getColor());
