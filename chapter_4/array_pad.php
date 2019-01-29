<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:43
 *
 * array_pad ( array $array , int $size , mixed $value ) : array
 *
 * Returns a copy of the array padded to size specified by size with value value. If size is positive then the array is
 * padded on the right, if it's negative then on the left. If the absolute value of size is less than or equal to the
 * length of the array then no padding takes place. It is possible to add at most 1048576 elements at a time.
 * @param array array initial array of values to pad.
 * @param int $size new size of the array.
 * @param mixed $value to pad if array is less than size.
 * @return array a copy of the array padded to size specified by size with value value. If size is positive then the
 * array is padded on the right, if it's negative then on the left.
 * If the absolute value of size is less than or equal to the length of the array then no padding takes place.
 */

$input = [12, 10, 9];
var_dump(array_pad($input, 5, 0));
var_dump(array_pad($input, -7, -1));
var_dump(array_pad($input, 2, 'noop'));