<?php

/**
 * The + operator will produce the union of two arrays.
 * When using the + union operator, PHP appends the array on the right of the operator
 * to the left. If a key exists in both arrays, then the left array value is used for the key.
 */

$firstArray = ['a' => 'hello', 'b' => 'world'];
$secondArray = ['a' => 'goodbye', 'c' => 'cruel'];
$thirdArray = ['a' => 'bad', 'c' => 'life'];

echo implode(' ', $a + $b);  // hello world cruel

/**
 * TODO: write why this comparison is true
 */
var_dump($firstArray == $thirdArray);