<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:39
 *
 * array_key_last ( array $array ) : mixed
 *
 * Get the last key of the given array without affecting the internal array pointer.
 * http://php.net/manual/en/function.array-key-last.php
 * @param array $array an array.
 * @return mixed|null returns the last key of array if the array is not empty; NULL otherwise.
 */

$array = ['a' => 1, 'b' => 2, 'c' => 3];
$lastKey = array_key_last($array);

var_dump($array);
var_dump($lastKey);