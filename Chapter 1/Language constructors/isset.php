<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 17:38
 *
 * Determine if a variable is set and is not NULL.
 * https://secure.php.net/manual/en/function.isset.php
 * Language constructor.
 */

$var = '';

// This will evaluate to TRUE so the text will be printed.
if (isset($var)) {
    echo 'This var is set so I will print.' . PHP_EOL;
}

// In the next examples we'll use var_dump to output
// the return value of isset().

$a = "test";
$b = "anothertest";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset ($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE

$a = array('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple'));

var_dump(isset($a['test']));            // TRUE
var_dump(isset($a['foo']));             // FALSE
var_dump(isset($a['hello']));           // FALSE

// The key 'hello' equals NULL so is considered unset
// If you want to check for NULL key values then try:
var_dump(array_key_exists('hello', $a)); // TRUE

// Checking deeper array values
var_dump(isset($a['pie']['a']));        // TRUE
var_dump(isset($a['pie']['b']));        // FALSE
var_dump(isset($a['cake']['a']['b']));  // FALSE