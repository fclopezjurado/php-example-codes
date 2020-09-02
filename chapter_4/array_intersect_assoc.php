<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:37
 *
 * array_intersect_assoc ( array $array1 , array $array2 [, array $... ] ) : array
 *
 * Returns an array containing all the values of array1 that are present in all the arguments. Note that the keys are
 * also used in the comparison unlike in array_intersect().
 * http://php.net/manual/en/function.array-intersect-assoc.php
 * @param array $array1 the array with master values to check.
 * @param array $array2 an array to compare values against.
 * @param array variadic ... a variable list of arrays to compare.
 * @return array an associative array containing all the values in array1 that are present in all of the arguments.
 */

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
var_dump(array_intersect_assoc($array1, $array2));