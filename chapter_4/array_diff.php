<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:36
 *
 * array_diff ( array $array1 , array $array2 [, array $... ] ) : array
 *
 * Compares array1 against one or more other arrays and returns the values in array1 that are not present in any of
 * the other arrays.
 * @param array $array1 the array to compare from.
 * @param array $array2 an array to compare against
 * @param array variadic ... more arrays to compare against
 * @return array containing all the entries from array1 that are not present in any of the other arrays.
 */

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
var_dump(array_diff($array1, $array2));