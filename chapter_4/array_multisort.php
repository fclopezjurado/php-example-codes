<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:43
 *
 * array_multisort ( array &$array1 [, mixed $array1_sort_order = SORT_ASC [,
 * mixed $array1_sort_flags = SORT_REGULAR [, mixed $... ]]] ) : bool
 *
 * Can be used to sort several arrays at once, or a multi-dimensional array by one or more dimensions.
 * Associative (string) keys will be maintained, but numeric keys will be re-indexed.
 * NOTE: If two members compare as equal, their relative order in the sorted array is undefined.
 * http://php.net/manual/en/function.array-multisort.php
 * @param array $array1 an array being sorted.
 * @param mixed $array1_sort_order the order used to sort the previous array argument. Either SORT_ASC to sort
 * ascendingly or SORT_DESC to sort descendingly.
 * This argument can be swapped with array1_sort_flags or omitted entirely, in which case SORT_ASC is assumed.
 * @param mixed $array1_sort_flags sort options for the previous array argument:
 * Sorting type flags:
 * SORT_REGULAR - compare items normally (don't change types)
 * SORT_NUMERIC - compare items numerically
 * SORT_STRING - compare items as strings
 * SORT_LOCALE_STRING - compare items as strings, based on the current locale.
 * It uses the locale, which can be changed using setlocale()
 * SORT_NATURAL - compare items as strings using "natural ordering" like natsort()
 * SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively
 *
 * This argument can be swapped with array1_sort_order or omitted entirely, in which case SORT_REGULAR is assumed.
 * @param array variadic ... more arrays, optionally followed by sort order and flags. Only elements corresponding to
 * equivalent elements in previous arrays are compared. In other words, the sort is lexicographical.
 * @return bool TRUE on success or FALSE on failure.
 */

# Sorting multiple arrays

$ar1 = [10, 100, 100, 0];
$ar2 = [1, 3, 2, 4];

var_dump(array_multisort($ar1, $ar2));
var_dump($ar1);
var_dump($ar2);

# Sorting multi-dimensional array

$ar = [
    ["10", 11, 100, 100, "a"],
    [1, 2, "2", 3, 1]
];

var_dump(array_multisort($ar[0], SORT_ASC, SORT_STRING, $ar[1], SORT_NUMERIC, SORT_DESC));
var_dump($ar);

# Sorting database results

$data[] = ['volume' => 67, 'edition' => 2];
$data[] = ['volume' => 86, 'edition' => 1];
$data[] = ['volume' => 85, 'edition' => 6];
$data[] = ['volume' => 98, 'edition' => 2];
$data[] = ['volume' => 86, 'edition' => 6];
$data[] = ['volume' => 67, 'edition' => 7];

foreach ($data as $key => $row) {
    $volume[$key] = $row['volume'];
    $edition[$key] = $row['edition'];
}

$volume = array_column($data, 'volume');
$edition = array_column($data, 'edition');

var_dump(array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data));
var_dump($volume);
var_dump($edition);
var_dump($data);

# Case insensitive sorting

$array = ['Alpha', 'atomic', 'Beta', 'bank'];
$array_lowercase = array_map('strtolower', $array);

var_dump(array_multisort($array_lowercase, SORT_ASC, SORT_STRING, $array));
var_dump($array);