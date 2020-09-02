<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:49
 *
 * array_unshift ( array &$array [, mixed $... ] ) : int
 *
 * prepends passed elements to the front of the array. Note that the list of elements is prepended as a whole, so
 * that the prepended elements stay in the same order. All numerical array keys will be modified to start counting
 * from zero while literal keys won't be changed.
 * http://php.net/manual/en/function.array-unshift.php
 * @param array $array the input array.
 * @param array variadic ... the values to prepend.
 * @return int the new number of elements in the array.
 */

$queue = ['orange', 'banana'];
var_dump(array_unshift($queue, 'apple', 'raspberry'));
var_dump($queue);