<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:50
 *
 * asort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) : bool
 *
 * This function sorts an array such that array indices maintain their correlation with the array elements they are
 * associated with. This is used mainly when sorting associative arrays where the actual element order is significant.
 * NOTE: If two members compare as equal, their relative order in the sorted array is undefined.
 * http://php.net/manual/en/function.asort.php
 * @param array $array the input array.
 * @param int $sort_flags you may modify the behavior of the sort using the optional parameter sort_flags, for details
 * see sort().
 * @return bool TRUE on success or FALSE on failure.
 */

$fruits = ['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple'];
var_dump(asort($fruits));
var_dump($fruits);