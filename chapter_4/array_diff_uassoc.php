<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:35
 *
 * array_diff_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func ) : array
 *
 * Compares array1 against array2 and returns the difference. Unlike array_diff() the array keys are used in the
 * comparison. Unlike array_diff_assoc() a user supplied callback function is used for the indices comparison, not
 * internal function.
 * http://php.net/manual/en/function.array-diff-uassoc.php
 * @param array $array1 the array to compare from
 * @param array $array2 an array to compare against.
 * @param array variadic ... more arrays to compare against
 * @param resource $key_compare_func the comparison function must return an integer less than, equal to, or greater
 * than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
 * Note that before PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.
 * callback ( mixed $a, mixed $b ) : int
 * @return array containing all the entries from array1 that are not present in any of the other arrays.
 */

/**
 * @param string $a
 * @param string $b
 * @return int
 */
function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");

var_dump(array_diff_uassoc($array1, $array2, "key_compare_func"));