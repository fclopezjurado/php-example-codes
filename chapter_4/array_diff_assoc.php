<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:31
 *
 * array_diff_assoc ( array $array1 , array $array2 [, array $... ] ) : array
 *
 * Computes the difference of arrays with additional index check.
 * http://php.net/manual/en/function.array-diff-assoc.php
 * Compares array1 against array2 and returns the difference. Unlike array_diff() the array keys are also used in the
 * comparison.
 * @param array $array1 the array to compare from.
 * @param array $array2 an array to compare against
 * @param array variadic ... more arrays to compare against
 * @return array containing all the entries from array1 that are not present in any of the other arrays.
 */

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
var_dump(array_diff_assoc($array1, $array2));

$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
var_dump(array_diff_assoc($array1, $array2));