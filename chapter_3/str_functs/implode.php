<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:19
 *
 * Join array elements with a glue string.
 * http://php.net/manual/en/function.implode.php
 * @param string $glue defaults to an empty string.
 * @param string[] $pieces the array of strings to implode.
 * @return string returns a string containing a string representation of all the array elements in the same order,
 * with the glue string between each element.
 */

$array = array('lastname', 'email', 'phone');
var_dump(implode(',', $array));

/**
 * Empty string when using an empty array
 */
var_dump(implode('hello', array()));

$a1 = array('1','2','3');
$a2 = array('a');
$a3 = array();

var_dump('a1 is: \'' . implode('\',\'', $a1) . '\'<br>');
var_dump('a1 is: \'' . implode('\',\'', $a2) . '\'<br>');
var_dump('a1 is: \'' . implode('\',\'', $a3) . '\'<br>');

$elements = array('a', 'b', 'c');
var_dump('<ul><li>' . implode('</li><li>', $elements) . '</li></ul>');

class Foo3
{
    protected $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function __toString()
    {
        return $this->title;
    }
}

$array = [new Foo3('foo'), new Foo3('bar'), new Foo3('qux')];
var_dump(implode('; ', $array));