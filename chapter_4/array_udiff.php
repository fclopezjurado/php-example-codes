<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:47
 *
 * array_udiff ( array $array1 , array $array2 [, array $... ], callable $value_compare_func ) : array
 *
 * Computes the difference of arrays by using a callback function for data comparison. This is unlike array_diff()
 * which uses an internal function for comparing the data.
 * http://php.net/manual/en/function.array-udiff.php
 * @param array $array1 the first array.
 * @param array $array2 the second array.
 * @param callable $value_compare_func the callback comparison function.
 * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is
 * considered to be respectively less than, equal to, or greater than the second. Note that before PHP 7.0.0 this
 * integer had to be in the range from -2147483648 to 2147483647.
 * callback ( mixed $a, mixed $b ) : int
 * @return array containing all the values of array1 that are not present in any of the other arguments.
 * NOTE: Please note that this function only checks one dimension of a n-dimensional array. Of course you can check
 * deeper dimensions by using array_udiff($array1[0], $array2[0], "data_compare_func");.
 */

/**
 * @param mixed $a
 * @param mixed $b
 * @return int
 */
function compare_by_area($a, $b)
{
    $areaA = $a->width * $a->height;
    $areaB = $b->width * $b->height;
    return $areaA <=> $areaB;
}

$array1 = [new stdclass, new stdclass, new stdclass, new stdclass];
$array2 = [new stdclass, new stdclass];

$array1[0]->width = 11;
$array1[0]->height = 3;
$array1[1]->width = 7;
$array1[1]->height = 1;
$array1[2]->width = 2;
$array1[2]->height = 9;
$array1[3]->width = 5;
$array1[3]->height = 7;

$array2[0]->width = 7;
$array2[0]->height = 5;
$array2[1]->width = 9;
$array2[1]->height = 2;

var_dump(array_udiff($array1, $array2, 'compare_by_area'));