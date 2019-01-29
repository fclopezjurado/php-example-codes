<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:39
 *
 * array_key_first ( array $array ) : mixed
 *
 * Get the first key of the given array without affecting the internal array pointer.
 * http://php.net/manual/en/function.array-key-first.php
 * @param array $array an array.
 * @return mixed the first key of array if the array is not empty; NULL otherwise.
 */

$array = ['a' => 1, 'b' => 2, 'c' => 3];
$firstKey = array_key_first($array);

var_dump($firstKey);
var_dump($array);