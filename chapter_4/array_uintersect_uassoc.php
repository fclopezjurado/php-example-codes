<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:48
 *
 * array_uintersect_uassoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func ,
 * callable $key_compare_func ) : array
 *
 * Computes the intersection of arrays with additional index check, compares data and indexes by separate callback
 * functions.
 * http://php.net/manual/en/function.array-uintersect-uassoc.php
 * @param array $array1 the first array.
 * @param array $array2 the second array.
 * @param callable $value_compare_func the comparison function must return an integer less than, equal to, or greater
 * than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
 * Note that before PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.
 * callback ( mixed $a, mixed $b ) : int
 * @param callable $key_compare_func key comparison callback function.
 * @return array containing all the values of array1 that are present in all the arguments.
 */

$array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
$array2 = ['a' => 'GREEN', 'B' => 'brown', 'yellow', 'red'];
var_dump(array_uintersect_uassoc($array1, $array2, 'strcasecmp', 'strcasecmp'));