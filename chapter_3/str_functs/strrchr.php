<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:29
 *
 * string strrchr ( string $haystack , mixed $needle )
 *
 * Find the last occurrence of a character in a string.
 * http://php.net/manual/en/function.strrchr.php
 * This function returns the portion of haystack which starts at the last occurrence of needle and goes until the end
 * of haystack.
 * @param string $haystack the string to search in.
 * @param mixed $needle if needle contains more than one character, only the first is used. This behavior is different
 * from that of strstr(). If needle is not a string, it is converted to an integer and applied as the ordinal value of
 * a character.
 * @return string|bool the portion of string, or FALSE if needle is not found.
 */

// get name of current directory
var_dump(substr(strrchr(realpath(__DIR__), '/'), 1));

// get everything after last newline
var_dump(substr(strrchr("Line 1\nLine 2\nLine 3", 10), 1 )); // 10 === \n

var_dump(strrchr('example phrase', 'y'));