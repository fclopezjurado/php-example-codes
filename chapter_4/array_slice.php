<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:46
 *
 * array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = FALSE ]] ) : array
 *
 * Returns the sequence of elements from the array $array as specified by the offset and length parameters.
 * http://php.net/manual/en/function.array-slice.php
 * @param array $array the input array.
 * @param int $offset if offset is non-negative, the sequence will start at that offset in the array. If offset is
 * negative, the sequence will start that far from the end of the array. Note that the offset denotes the position in
 * the array, not the key.
 * @param int $length if length is given and is positive, then the sequence will have up to that many elements in it.
 * If the array is shorter than the length, then only the available array elements will be present. If length is
 * given and is negative then the sequence will stop that many elements from the end of the array. If it is omitted,
 * then the sequence will have everything from offset up until the end of the array.
 * @param bool $preserve_keys note that array_slice() will reorder and reset the integer array indices by default.
 * You can change this behaviour by setting preserve_keys to TRUE. String keys are always preserved, regardless of
 * this parameter.
 * @return array returns the slice. If the offset is larger than the size of the array then returns an empty array.
 */

# array_slice() examples

$input = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_slice($input, 2));
var_dump(array_slice($input, -2, 1));
var_dump(array_slice($input, 0, 3));
var_dump(array_slice($input, 2, -1));
var_dump(array_slice($input, 2, -1, true));

# array_slice() and one-based array

$input = [1 => 'a', 'b', 'c', 'd', 'e'];
var_dump(array_slice($input, 1, 2));

# array_slice() and array with mixed keys

$ar = ['a' => 'apple', 'b' => 'banana', '42' => 'pear', 'd' => 'orange'];
var_dump(array_slice($ar, 0, 3));
var_dump(array_slice($ar, 0, 3, true));