<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:38
 *
 * array_intersect ( array $array1 , array $array2 [, array $... ] ) : array
 *
 * Returns an array containing all the values of array1 that are present in all the arguments. Note that keys are
 * preserved.
 * http://php.net/manual/en/function.array-intersect.php
 * @param array $array1 the array with master values to check.
 * @param array $array2 an array to compare values against.
 * @param array variadic ... a variable list of arrays to compare.
 * @return array containing all of the values in array1 whose values exist in all of the parameters.
 */

$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
var_dump(array_intersect($array1, $array2));