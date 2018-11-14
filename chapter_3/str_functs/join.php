<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:19
 *
 * Alias of join.
 */

$array = array('lastname', 'email', 'phone');
var_dump(join(',', $array));

/**
 * Empty string when using an empty array
 */
var_dump(join('hello', array()));

$a1 = array('1','2','3');
$a2 = array('a');
$a3 = array();

var_dump('a1 is: \'' . join('\',\'', $a1) . '\'<br>');
var_dump('a1 is: \'' . join('\',\'', $a2) . '\'<br>');
var_dump('a1 is: \'' . join('\',\'', $a3) . '\'<br>');

$elements = array('a', 'b', 'c');
var_dump('<ul><li>' . join('</li><li>', $elements) . '</li></ul>');

class Foo4
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

$array = [new Foo4('foo'), new Foo4('bar'), new Foo4('qux')];
var_dump(join('; ', $array));