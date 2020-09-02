<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:54
 *
 * ksort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) : bool
 *
 * Sorts an array by key, maintaining key to data correlations. This is useful mainly for associative arrays.
 * http://php.net/manual/en/function.ksort.php
 * @param array $array the input array.
 * @param int $sort_flags you may modify the behavior of the sort using the optional parameter sort_flags,
 * for details see sort().
 * @return bool TRUE on success or FALSE on failure.
 */

$fruits = ['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple'];
var_dump(ksort($fruits));
var_dump($fruits);