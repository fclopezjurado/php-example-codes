<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:38
 *
 * array_intersect_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func ) : array
 *
 * Returns an array containing all the values of array1 which have matching keys that are present in all the arguments.
 * http://php.net/manual/en/function.array-intersect-ukey.php
 * @param array $array1 initial array for comparison of the arrays.
 * @param array $array2 first array to compare keys against.
 * @param array variadic ... variable list of array arguments to compare keys against.
 * @param resource $key_compare_func the comparison function must return an integer less than, equal to, or greater
 * than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
 * Note that before PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.
 * callback ( mixed $a, mixed $b ) : int
 * @return array the values of array1 whose keys exist in all the arguments.
 */

/**
 * @param string $key1
 * @param string $key2
 * @return int
 */
function key_compare_func($key1, $key2)
{
    return $key1 <=> $key2;
}

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_ukey($array1, $array2, 'key_compare_func'));