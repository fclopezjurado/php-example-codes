<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:45
 *
 * array_replace ( array $array1 [, array $... ] ) : array
 *
 * Replaces the values of array1 with values having the same keys in each of the following arrays. If a key from the
 * first array exists in the second array, its value will be replaced by the value from the second array. If the key
 * exists in the second array, and not the first, it will be created in the first array. If a key only exists in the
 * first array, it will be left as is. If several arrays are passed for replacement, they will be processed in order,
 * the later arrays overwriting the previous values.
 *
 * array_replace() is not recursive : it will replace values in the first array by whatever type is in the second array.
 * http://php.net/manual/en/function.array-replace.php
 * @param array $array1 the array in which elements are replaced.
 * @param array variadic ... arrays from which elements will be extracted. Values from later arrays overwrite the
 * previous values.
 * @return array|null or NULL if an error occurs.
 */

$base = ['orange', 'banana', 'apple', 'raspberry'];
$replacements = [0 => 'pineapple', 4 => 'cherry'];
$replacements2 = [0 => 'grape'];

var_dump(array_replace($base, $replacements, $replacements2));

$input = ['a', 'b', 'c'];
$replace = [3 => 'd', '1' => 'q'];
$replaceTwo = [2 => 1, 1.3 => 'Z'];

var_dump(array_replace($input, $replace, $replaceTwo));