<?php

/**
 * PHP array keys are case sensitive: $arr['A'] and $arr['a'] are different elements.
 * Keys may only be a string or an integer. Other variable types are cast into one of these types before being stored.
 * Strings containing decimal valid integers will be cast to the integer type.
 *
 * PHP rounds floats toward zero when it casts floats to integers. Another way of putting
 * this is to say that the fractional portion of the number is truncated. For example, the float 133.7 will cast
 * to the integer value 133 (and not rounded up to 134).
 */

$array = [
    "2" =>"hello",
    0x03 =>"world",
    0b100 => ' this is ',
    "04" =>"PHP",
    8.7 =>"!!!!",
    false => true,
    null => 3,
];

var_dump($array);
