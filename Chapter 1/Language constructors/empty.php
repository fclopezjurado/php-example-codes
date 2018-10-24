<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 15/10/2018
 * Time: 17:28
 *
 * Determine whether a variable is empty
 * https://secure.php.net/manual/en/function.empty.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 * Only supports variables; anything else like functions will result in a parse error.
 * In other words, the following will not work: "empty(trim($name))".
 */

$var = 0;

/**
 * Evaluates to true because $var is empty.
 */
if (empty($var)) {
    echo '$var is either 0, empty, or not set at all' . PHP_EOL;
}

/**
 * Evaluates as true because $var is set.
 */
if (isset($var)) {
    echo '$var is set even though it is empty' . PHP_EOL;
}

$expected_array_got_string = 'somestring';
var_dump(empty($expected_array_got_string['some_key']));
var_dump(empty($expected_array_got_string[0]));
var_dump(empty($expected_array_got_string['0']));
var_dump(empty($expected_array_got_string[0.5]));
var_dump(empty($expected_array_got_string['0.5']));
var_dump(empty($expected_array_got_string['0 Mostel']));