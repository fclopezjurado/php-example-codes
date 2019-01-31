<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:50
 *
 * arsort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) : bool
 *
 * This function sorts an array such that array indices maintain their correlation with the array elements they are
 * associated with. This is used mainly when sorting associative arrays where the actual element order is significant.
 * NOTE: If two members compare as equal, their relative order in the sorted array is undefined.
 * http://php.net/manual/en/function.arsort.php
 * @param array $array the input array.
 * @param int $sort_flags you may modify the behavior of the sort using the optional parameter sort_flags.
 * Sorting type flags:
 * SORT_REGULAR - compare items normally (don't change types)
 * SORT_NUMERIC - compare items numerically
 * SORT_STRING - compare items as strings
 * SORT_LOCALE_STRING - compare items as strings, based on the current locale. It uses the locale, which can be
 * changed using setlocale()
 * SORT_NATURAL - compare items as strings using "natural ordering" like natsort()
 * SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively
 * @return bool TRUE on success or FALSE on failure.
 */

/**
 * The fruits have been sorted in reverse alphabetical order, and the index associated with each element has been
 * maintained.
 */
$fruits = ['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple'];
var_dump(arsort($fruits));
var_dump($fruits);