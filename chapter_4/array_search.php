<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:45
 *
 * array_search ( mixed $needle , array $haystack [, bool $strict = FALSE ] ) : mixed
 *
 * Searches haystack for needle.
 * http://php.net/manual/en/function.array-search.php
 * @param mixed $needle the searched value.
 * NOTE: If needle is a string, the comparison is done in a case-sensitive manner.
 * @param array $haystack the array.
 * @param bool $strict if the third parameter strict is set to TRUE then the array_search() function will search for
 * identical elements in the haystack. This means it will also perform a strict type comparison of the needle in the
 * haystack, and objects must be the same instance.
 * @return mixed|bool the key for needle if it is found in the array, FALSE otherwise.
 * If needle is found in haystack more than once, the first matching key is returned. To return the keys for all
 * matching values, use array_keys() with the optional search_value parameter instead.
 */

$array = [0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'];
var_dump(array_search('green', $array));
var_dump(array_search('red', $array));
var_dump(array_search('unknown', $array));