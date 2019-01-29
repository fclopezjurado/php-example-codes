<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:36
 *
 * array_fill_keys ( array $keys , mixed $value ) : array
 *
 * Fills an array with the value of the value parameter, using the values of the keys array as keys.
 * http://php.net/manual/en/function.array-fill-keys.php
 * @param array $keys array of values that will be used as keys. Illegal values for key will be converted to string.
 * @param mixed $value to use for filling.
 * @return array the filled array.
 */

var_dump(array_fill_keys(['foo', 5, 10, 'bar'], 'banana'));