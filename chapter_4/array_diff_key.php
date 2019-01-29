<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:31
 *
 * array_diff_key ( array $array1 , array $array2 [, array $... ] ) : array
 *
 * Compares the keys from array1 against the keys from array2 and returns the difference. This function is like
 * array_diff() except the comparison is done on the keys instead of the values.
 * http://php.net/manual/en/function.array-diff-key.php
 * @param array $array1 the array to compare from.
 * @param array $array2 an array to compare against.
 * @param array variadic ... more arrays to compare against.
 * @return array an array containing all the entries from array1 whose keys are absent from all of the other arrays.
 */

$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);

var_dump(array_diff_key($array1, $array2));

$array1 = array('blue' => 1, 'red'  => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);
$array3 = array('blue' => 6, 'yellow' => 7, 'mauve' => 8);

var_dump(array_diff_key($array1, $array2, $array3));