<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:49
 *
 * array_unique ( array $array [, int $sort_flags = SORT_STRING ] ) : array
 *
 * Takes an input array and returns a new array without duplicate values.
 * Note that keys are preserved. If multiple elements compare equal under the given sort_flags, then the key and value
 * of the first equal element will be retained.
 * NOTE: Two elements are considered equal if and only if (string) $elem1 === (string) $elem2 i.e. when the string
 * representation is the same, the first element will be used.
 * http://php.net/manual/en/function.array-unique.php
 * @param array $array the input array.
 * @param int $sort_flags the optional second parameter sort_flags may be used to modify the sorting behavior using
 * these values:
 * Sorting type flags:
 * SORT_REGULAR - compare items normally (don't change types)
 * SORT_NUMERIC - compare items numerically
 * SORT_STRING - compare items as strings
 * SORT_LOCALE_STRING - compare items as strings, based on the current locale.
 * @return array the filtered array.
 */

# array_unique() example

$input = ['a' => 'green', 'red', 'b' => 'green', 'blue', 'red'];
var_dump(array_unique($input));

# array_unique() and types

$input = [4, '4', '3', 4, 3, '3'];
var_dump(array_unique($input));
var_dump(array_unique($input));