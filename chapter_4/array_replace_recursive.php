<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:44
 *
 * array_replace_recursive ( array $array1 [, array $... ] ) : array
 *
 * Replaces the values of array1 with the same values from all the following arrays. If a key from the first array
 * exists in the second array, its value will be replaced by the value from the second array. If the key exists in
 * the second array, and not the first, it will be created in the first array. If a key only exists in the first
 * array, it will be left as is. If several arrays are passed for replacement, they will be processed in order, the
 * later array overwriting the previous values.
 *
 * array_replace_recursive() is recursive : it will recurse into arrays and apply the same process to the inner value.
 * When the value in the first array is scalar, it will be replaced by the value in the second array, may it be scalar
 * or array. When the value in the first array and the second array are both arrays, array_replace_recursive() will
 * replace their respective value recursively.
 * http://php.net/manual/en/function.array-replace-recursive.php
 * @param array $array1 the array in which elements are replaced.
 * @param array variadic ... optional. Arrays from which elements will be extracted.
 * @return array|null array, or NULL if an error occurs.
 */

# array_replace_recursive() example

$base = ['citrus' => ['orange'] , 'berries' => ['blackberry', 'raspberry']];
$replacements = ['citrus' => ['pineapple'], 'berries' => ['blueberry']];
var_dump(array_replace_recursive($base, $replacements));
var_dump(array_replace($base, $replacements));

# array_replace_recursive() and recursive behavior

$base = ['citrus' => ['orange'] , 'berries' => ['blackberry', 'raspberry'], 'others' => 'banana'];
$replacements =  ['citrus' => 'pineapple', 'berries' => ['blueberry'], 'others' => ['litchis']];
$replacements2 = ['citrus' => ['pineapple'], 'berries' => ['blueberry'], 'others' => 'litchis'];
var_dump(array_replace_recursive($base, $replacements, $replacements2));

