<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 16/10/2018
 * Time: 18:12
 *
 * Assign variables as if they were an array.
 * https://secure.php.net/manual/en/function.list.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

$info = array('coffee', 'brown', 'caffeine');

/**
 * Listing all the variables
 */
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

/**
 * Listing some of them
 */
list($drink, , $power) = $info;
echo "$drink has $power.\n";

/**
 * Or let's skip to only the third one
 */
list( , , $power) = $info;
echo "I need $power!\n";

/**
 * list() doesn't work with strings
 */
list($bar) = "abcde";
var_dump($bar);

/**
 * list() with less variables than elements in array.
 */
list($drink, $color) = $info;
var_dump($drink);
var_dump($color);

/**
 * list() with more variables than elements in array.
 * Generates a PHP Notice.
 */
list($drink, $color, $power, $bar) = $info;
var_dump($drink);
var_dump($color);
var_dump($power);
var_dump($bar);