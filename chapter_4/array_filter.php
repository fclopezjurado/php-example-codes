<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:36
 *
 * array_filter ( array $array [, callable $callback [, int $flag = 0 ]] ) : array
 *
 * Iterates over each value in the array passing them to the callback function. If the callback function returns true,
 * the current value from array is returned into the result array. Array keys are preserved.
 * http://php.net/manual/en/function.array-filter.php
 * @param array $array the array to iterate over.
 * @param resource $callback the callback function to use. If no callback is supplied, all entries of array equal to
 * FALSE (see converting to boolean) will be removed.
 * @param int $flag flag determining what arguments are sent to callback:
 * ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value.
 * ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value.
 * Default is 0 which will pass value as the only argument to callback instead.
 * @return array the filtered array.
 */

# Example #1 array_filter() example

/**
 * @param $var
 * @return int
 */
function odd($var)
{
    return($var & 1);
}

/**
 * @param $var
 * @return bool
 */
function even($var)
{
    return(!($var & 1));
}

$array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

var_dump(array_filter($array1, "odd"));
var_dump(array_filter($array2, "even"));

# Example #2 array_filter() without callback

$entry = array(0 => 'foo',  1 => false, 2 => -1, 3 => null, 4 => '');
var_dump(array_filter($entry));

# Example #3 array_filter() with flag

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));

