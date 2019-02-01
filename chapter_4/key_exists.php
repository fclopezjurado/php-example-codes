<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:53
 *
 * key_exists ( mixed $key , array $array ) : bool
 *
 * Returns TRUE if the given key is set in the array. key can be any value possible for an array index.
 * http://php.net/manual/en/function.key-exists.php
 * @param mixed $key value to check.
 * @param array $array an array with keys to check.
 * @return bool TRUE on success or FALSE on failure.
 * NOTE: key_exists() will search for the keys in the first dimension only. Nested keys in multidimensional
 * arrays will not be found.
 */

# Example #1 key_exists() example

$search_array = ['first' => 1, 'second' => 4];
var_dump(key_exists('first', $search_array));

# Example #2 key_exists() vs isset()

$search_array = ['first' => null, 'second' => 4];
var_dump(isset($search_array['first']));
var_dump(key_exists('first', $search_array));