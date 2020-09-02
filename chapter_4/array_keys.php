<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:40
 *
 * array_keys ( array $array ) : array
 * array_keys ( array $array , mixed $search_value [, bool $strict = FALSE ] ) : array
 *
 * Returns the keys, numeric and string, from the array.
 * If a search_value is specified, then only the keys for that value are returned. Otherwise, all the keys from the
 * array are returned.
 * http://php.net/manual/en/function.array-keys.php
 * @param array an array containing keys to return.
 * @param mixed $search_value if specified, then only keys containing these values are returned.
 * @param bool $strict determines if strict comparison (===) should be used during the search.
 * @return array of all the keys in array.
 */

var_dump(array_keys([0 => 100, 'color' => 'red']));
var_dump(array_keys(['blue', 'red', 'green', 'blue', 'blue']));
var_dump(array_keys(['color' => ['blue', 'red', 'green'], 'size' => ['small', 'medium', 'large']]));
var_dump(array_keys(['blue', 'red', 'green', 'blue', 'blue'], 'blue', false));
var_dump(array_keys(['Blue', 'red', 'green', 'blue', 'blue'], 'Blue', true));