<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:43
 *
 * array_pop ( array &$array ) : mixed
 *
 * Pops and returns the value of the last element of array, shortening the array by one element.
 * NOTE: This function will reset() the array pointer of the input array after use.
 * http://php.net/manual/en/function.array-pop.php
 * @param array $array the array to get the value from.
 * @return mixed|null the value of the last element of array. If array is empty (or is not an array), NULL will be
 * returned.
 * @throws Throwable this function will produce an error of level E_WARNING when called on a non-array.
 */

$stack = ['orange', 'banana', 'apple', 'raspberry'];
var_dump(array_pop($stack));
var_dump($stack);