<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:46
 *
 * array_shift ( array &$array ) : mixed
 *
 * Shifts the first value of the array off and returns it, shortening the array by one element and moving everything
 * down. All numerical array keys will be modified to start counting from zero while literal keys won't be touched.
 * NOTE: This function will reset() the array pointer of the input array after use.
 * http://php.net/manual/en/function.array-shift.php
 * @param array $array the input array.
 * @return mixed|null the shifted value, or NULL if array is empty or is not an array.
 */

$stack = ['orange', 'banana', 'apple', 'raspberry'];
var_dump(array_shift($stack));
var_dump($stack);