<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:35
 *
 * array_diff_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func ) : array
 *
 * Compares the keys from array1 against the keys from array2 and returns the difference. This function is like
 * array_diff() except the comparison is done on the keys instead of the values. Unlike array_diff_key() a user
 * supplied callback function is used for the indices comparison, not internal function.
 * http://php.net/manual/en/function.array-diff-ukey.php
 * @param array $array1 the array to compare from.
 * @param array $array2 an array to compare against.
 * @param array variadic ... more arrays to compare against.
 * @param resource $key_compare_func the comparison function must return an integer less than, equal to, or greater
 * than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
 * Note that before PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.
 * callback ( mixed $a, mixed $b ) : int
 * @return array containing all the entries from array1 that are not present in any of the other arrays.
 */

/**
 * @param $key1
 * @param $key2
 * @return int
 */
function key_compare_func($key1, $key2)
{
    return $key1 <=> $key2;
}

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));