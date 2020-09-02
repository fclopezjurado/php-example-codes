<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:53
 *
 * krsort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) : bool
 *
 * Sorts an array by key in reverse order, maintaining key to data correlations. This is useful mainly for associative
 * arrays.
 * http://php.net/manual/en/function.krsort.php
 * @param array $array the input array.
 * @param int $sort_flags you may modify the behavior of the sort using the optional parameter sort_flags, for details
 * see sort().
 * @return bool TRUE on success or FALSE on failure.
 */

$fruits = ['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple'];
var_dump(krsort($fruits));
var_dump($fruits);