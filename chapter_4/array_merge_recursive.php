<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:42
 *
 * array_merge_recursive ( array $array1 [, array $... ] ) : array
 *
 * Merges the elements of one or more arrays together so that the values of one are appended to the end of the
 * previous one. It returns the resulting array.
 *
 * If the input arrays have the same string keys, then the values for these keys are merged together into an array,
 * and this is done recursively, so that if one of the values is an array itself, the function will merge it with a
 * corresponding entry in another array too.
 * If, however, the arrays have the same numeric key, the later value will not overwrite the original value, but will
 * be appended.
 * http://php.net/manual/en/function.array-merge-recursive.php
 * @param array $array1 initial array to merge.
 * @param array variadic ... variable list of arrays to recursively merge.
 * @return array values resulted from merging the arguments together.
 */

$ar1 = ['color' => ['favorite' => 'red'], 5];
$ar2 = [10, 'color' => ['favorite' => 'green', 'blue']];
var_dump(array_merge_recursive($ar1, $ar2));