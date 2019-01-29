<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:42
 *
 * array_merge ( array $array1 [, array $... ] ) : array
 *
 * Merges the elements of one or more arrays together so that the values of one are appended to the end of the previous
 * one. It returns the resulting array.
 * If the input arrays have the same string keys, then the later value for that key will overwrite the previous one.
 * If, however, the arrays contain numeric keys, the later value will not overwrite the original value, but will be
 * appended.
 * Values in the input arrays with numeric keys will be renumbered with incrementing keys starting from zero in the
 * result array.
 * http://php.net/manual/en/function.array-merge.php
 * @param array $array1 initial array to merge.
 * @param array variadic ... variable list of arrays to merge.
 */

# array_merge() example

$array1 = ['color' => 'red', 2, 4];
$array2 = ['a', 'b', 'color' => 'green', 'shape' => 'trapezoid', 4];
var_dump(array_merge($array1, $array2));

# Simple array_merge() example

$array1 = [];
$array2 = [1 => 'data'];
var_dump(array_merge($array1, $array2));

/**
 * If you want to append array elements from the second array to the first array while not overwriting the elements
 * from the first array and not re-indexing, use the + array union operator:
 */

$array1 = [0 => 'zero_a', 2 => 'two_a', 3 => 'three_a'];
$array2 = [1 => 'one_b', 3 => 'three_b', 4 => 'four_b'];
var_dump($array1 + $array2);

# array_merge() with non-array types

$beginning = 'foo';
$end = [1 => 'bar'];
$result = array_merge((array)$beginning, (array)$end);
print_r($result);

