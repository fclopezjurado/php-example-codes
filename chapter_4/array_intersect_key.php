<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:37
 *
 * array_intersect_key ( array $array1 , array $array2 [, array $... ] ) : array
 *
 * Returns an array containing all the entries of array1 which have keys that are present in all the arguments.
 * http://php.net/manual/en/function.array-intersect-key.php
 * @param array $array1 the array with master keys to check.
 * @param array $array2 an array to compare keys against.
 * @param array variadic ... a variable list of arrays to compare.
 * @return array an associative array containing all the entries of array1 which have keys that are present in all
 * arguments.
 */

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
var_dump(array_intersect_key($array1, $array2));