<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:37
 *
 * array_intersect_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func ) : array
 *
 * Returns an array containing all the values of array1 that are present in all the arguments. Note that the keys are
 * used in the comparison unlike in array_intersect().
 * http://php.net/manual/en/function.array-intersect-uassoc.php
 * @param array $array1 initial array for comparison of the arrays.
 * @param array $array2 first array to compare keys against.
 * @param array variadic ... variable list of array arguments to compare values against.
 * @param resource $key_compare_func the comparison function must return an integer less than, equal to, or greater
 * than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
 * Note that before PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.
 * callback ( mixed $a, mixed $b ) : int
 * @return array the values of array1 whose values exist in all of the arguments.
 */

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
var_dump(array_intersect_uassoc($array1, $array2, "strcasecmp"));