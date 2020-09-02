<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:36
 *
 * array_fill ( int $start_index , int $num , mixed $value ) : array
 *
 * Fills an array with num entries of the value of the value parameter, keys starting at the start_index parameter.
 * http://php.net/manual/en/function.array-fill.php
 * @param int $start_index the first index of the returned array. If start_index is negative, the first index of the
 * returned array will be start_index and the following indices will start from zero (see example).
 * @param int $num number of elements to insert. Must be greater than or equal to zero.
 * @param mixed $value to use for filling.
 * @return array the filled array.
 * @throws Throwable a E_WARNING if num is less than zero.
 */

var_dump(array_fill(5, 6, 'banana'));
var_dump(array_fill(-2, 4, 'pear'));