<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:47
 *
 * array_sum ( array $array ) : number
 *
 * Returns the sum of values in an array.
 * http://php.net/manual/en/function.array-sum.php
 * @param array $array the input array.
 * @return int|float the sum of values as an integer or float; 0 if the array is empty.
 */

$array1 = [2, 4, 6, 8];
$array2 = ['a' => 1.2, 'b' => 2.3, 'c' => 3.4];

var_dump(array_sum($array1));
var_dump(array_sum($array2));