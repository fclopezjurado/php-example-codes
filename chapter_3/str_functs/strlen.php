<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:27
 *
 * Get string length.
 * http://php.net/manual/en/function.strlen.php
 * Returns the length of the given string.
 * @param string $string The string being measured for length.
 * @return int|null the length of the string on success, and 0 if the string is empty.
 * NOTE: strlen() returns the number of bytes rather than the number of characters in a string.
 * NOTE: strlen() returns NULL when executed on arrays, and an E_WARNING level error is emitted.
 */

$array = [];

var_dump(strlen('abcdef'));
var_dump(strlen(' ab cd '));
var_dump(strlen(''));
var_dump(strlen($array));