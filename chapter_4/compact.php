<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:50
 *
 * compact ( mixed $varname1 [, mixed $... ] ) : array
 *
 * Creates an array containing variables and their values.
 * For each of these, compact() looks for a variable with that name in the current symbol table and adds it to the
 * output array such that the variable name becomes the key and the contents of the variable become the value for that
 * key. In short, it does the opposite of extract().
 * NOTE: Before PHP 7.3, any strings that are not set will silently be skipped.
 * http://php.net/manual/en/function.compact.php
 * @param mixed $varname1 compact() takes a variable number of parameters. Each parameter can be either a string
 * containing the name of the variable, or an array of variable names. The array can contain other arrays of variable
 * names inside it; compact() handles it recursively.
 * @return array the output array with all the variables added to it.
 * @throws Throwable E_NOTICE level error if a given string refers to an unset variable.
 */

$city  = 'San Francisco';
$state = 'CA';
$event = 'SIGGRAPH';
$location_vars = ['city', 'state'];

var_dump(compact('event', 'nothing_here', $location_vars));