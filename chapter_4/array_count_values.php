<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:30
 *
 * array_count_values ( array $array ) : array
 *
 * Counts all the values of an array.
 * http://php.net/manual/en/function.array-count-values.php
 * @param array $array the array of values to count.
 * @return array an associative array of values from array as keys and their count as value.
 * @throws Throwable E_WARNING for every element which is not string or integer.
 */

$array = array(1, "hello", 1, "world", "hello");
var_dump(array_count_values($array));