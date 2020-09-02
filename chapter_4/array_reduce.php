<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:44
 *
 * array_reduce ( array $array , callable $callback [, mixed $initial = NULL ] ) : mixed
 *
 * Applies iteratively the callback function to the elements of the array, so as to reduce the array to a single value.
 * http://php.net/manual/en/function.array-reduce.php
 * @param array $array the input array.
 * @param resource $callback "callback ( mixed $carry , mixed $item ) : mixed"
 *  @param mixed $carry holds the return value of the previous iteration; in the case of the first iteration it instead
 *  holds the value of initial.
 *  @param mixed $item holds the value of the current iteration.
 * @param mixed $initial if the optional initial is available, it will be used at the beginning of the process, or as a
 * final result in case the array is empty.
 * @return mixed the resulting value. If the array is empty and initial is not passed, array_reduce() returns NULL.
 */

/**
 * @param $carry
 * @param $item
 * @return mixed
 */
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

/**
 * @param $carry
 * @param $item
 * @return mixed
 */
function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = [1, 2, 3, 4, 5];
$x = [];

var_dump(array_reduce($a, 'sum'));
var_dump(array_reduce($a, 'product', 10));
var_dump(array_reduce($x, 'sum', 'No data to reduce'));