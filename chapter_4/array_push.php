<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:44
 *
 * array_push ( array &$array [, mixed $... ] ) : int
 *
 * Treats array as a stack, and pushes the passed variables onto the end of array. The length of array increases by
 * the number of variables pushed. Has the same effect as:
 *
 * <?php
 *  $array[] = $var;
 * ?>
 *
 * Repeated for each passed value.
 * NOTE: If you use array_push() to add one element to the array, it's better to use $array[] = because in that way
 * there is no overhead of calling a function.
 * NOTE: array_push() will raise a warning if the first argument is not an array. This differs from the $var[]
 * behaviour where a new array is created.
 * @param array $array the input array.
 * @param array variadic ... the values to push onto the end of the array.
 * @return int the new number of elements in the array.
 */

$stack = ['orange', 'banana'];
var_dump(array_push($stack, 'apple', 'raspberry'));
var_dump($stack);