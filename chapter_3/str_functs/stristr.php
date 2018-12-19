<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:27
 *
 * string stristr ( string $haystack , mixed $needle [, bool $before_needle = FALSE ] )
 *
 * Case-insensitive strstr().
 * http://php.net/manual/en/function.stristr.php
 * Find the first occurrence of a string.
 * Returns part of haystack string starting from and including the first occurrence of needle to the end of haystack.
 * NOTE: This function is case-sensitive. For case-insensitive searches, use stristr().
 * NOTE: If you only want to determine if a particular needle occurs within haystack, use the faster and less memory
 * intensive function strpos() instead.
 * @param string $haystack the input string.
 * @param mixed $needle if needle is not a string, it is converted to an integer and applied as the ordinal value of a
 * character.
 * @param bool $before_needle if true, strstr() returns the part of the haystack before the first occurrence of the
 * needle (excluding the needle).
 * @return string|bool the portion of string, or FALSE if needle is not found.
 */

var_dump(stristr('name@example.com', 'X'));
var_dump(stristr('name@example.com', 'X', true));
var_dump(stristr('name@example.com', 'z'));