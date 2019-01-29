<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:37
 *
 * array_flip ( array $array ) : array
 *
 * Returns an array in flip order, i.e. keys from array become values and values from array become keys. Note that the
 * values of array need to be valid keys, i.e. they need to be either integer or string. A warning will be emitted if a
 * value has the wrong type, and the key/value pair in question will not be included in the result. If a value has
 * several occurrences, the latest key will be used as its value, and all others will be lost.
 * http://php.net/manual/en/function.array-flip.php
 * @param array $array an array of key/value pairs to be flipped.
 * @return array|null the flipped array on success and NULL on failure.
 */

var_dump(array_flip(["oranges", "apples", "pears"]));
var_dump(array_flip(["a" => 1, "b" => 1, "c" => 2]));