<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:51
 *
 * count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] ) : int
 *
 * Counts all elements in an array, or something in an object.
 * For objects, if you have SPL installed, you can hook into count() by implementing interface Countable. The interface
 * has exactly one method, Countable::count(), which returns the return value for the count() function.
 * Please see the Array section of the manual for a detailed explanation of how arrays are implemented and used in PHP.
 * http://php.net/manual/en/function.count.php
 * @param Countable|array $array_or_countable an array or Countable object.
 * @param int $mode if the optional mode parameter is set to COUNT_RECURSIVE (or 1), count() will recursively count the
 * array. This is particularly useful for counting all the elements of a multidimensional array.
 * CAUTION: count() can detect recursion to avoid an infinite loop, but will emit an E_WARNING every time it does
 * (in case the array contains itself more than once) and return a count higher than may be expected.
 * @return int the number of elements in array_or_countable. When the parameter is neither an array nor an object with
 * implemented Countable interface, 1 will be returned. There is one exception, if array_or_countable is NULL, 0 will
 * be returned.
 */

# count() example

$a = [];
$b = [];
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$b[0] = 7;
$b[5] = 9;
$b[10] = 11;

var_dump(count($a));
var_dump(count($b));
var_dump(count(null));
var_dump(count(false));

# Recursive count() example

$food = ['fruits' => ['orange', 'banana', 'apple'], 'veggie' => ['carrot', 'collard', 'pea']];
var_dump(count($food, COUNT_RECURSIVE));
var_dump(count($food));

