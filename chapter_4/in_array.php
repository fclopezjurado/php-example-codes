<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:53
 *
 * in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] ) : bool
 *
 * Searches haystack for needle using loose comparison unless strict is set.
 * http://php.net/manual/en/function.in-array.php
 * @param mixed $needle the searched value.
 * NOTE: If needle is a string, the comparison is done in a case-sensitive manner.
 * @param array $haystack the array.
 * @param bool $strict if the third parameter strict is set to TRUE then the in_array() function will also check the
 * types of the needle in the haystack.
 * @return bool TRUE if needle is found in the array, FALSE otherwise.
 */

# in_array() example

$os = ['Mac', 'NT', 'Irix', 'Linux'];
var_dump(in_array('Irix', $os));
var_dump(in_array('mac', $os));

# in_array() with strict example

$a = ['1.10', 12.4, 1.13];
var_dump(in_array('12.4', $a, true));
var_dump(in_array(1.13, $a, true));

# in_array() with an array as needle

$a = [['p', 'h'], ['p', 'r'], 'o'];
var_dump(in_array(['p', 'h'], $a));
var_dump(in_array(['f', 'i'], $a));
var_dump(in_array('o', $a));