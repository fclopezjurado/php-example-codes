<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:49
 *
 * array_walk_recursive ( array &$array , callable $callback [, mixed $userdata = NULL ] ) : bool
 *
 * Applies the user-defined callback function to each element of the array. This function will recurse into deeper
 * arrays.
 * http://php.net/manual/en/function.array-walk-recursive.php
 * @param array $array the input array.
 * @param callable $callback typically, callback takes on two parameters. The array parameter's value being the first,
 * and the key/index second.
 * NOTE: if callback needs to be working with the actual values of the array, specify the first parameter of callback
 * as a reference. Then, any changes made to those elements will be made in the original array itself.
 * @param mixed $userdata if the optional user data parameter is supplied, it will be passed as the third parameter to
 * the callback.
 * @return bool TRUE on success or FALSE on failure.
 */

$sweet = ['a' => 'apple', 'b' => 'banana'];
$fruits = ['sweet' => $sweet, 'sour' => 'lemon'];

function test_print($item, $key)
{
    var_dump("$key holds $item");
}

var_dump(array_walk_recursive($fruits, 'test_print'));