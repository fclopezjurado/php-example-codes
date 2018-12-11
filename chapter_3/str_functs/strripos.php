<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:29
 *
 * Find the position of the last occurrence of a case-insensitive substring in a string.
 * http://php.net/manual/en/function.strripos.php
 * Find the numeric position of the last occurrence of needle in the haystack string. Unlike the strrpos(), strripos()
 * is case-insensitive.
 * @param string $haystack the string to search in.
 * @param mixed $needle if needle is not a string, it is converted to an integer and applied as the ordinal value of a
 * character.
 * @param int $offset if specified, search will start this number of characters counted from the beginning of the
 * string. If the value is negative, search will instead start from that many characters from the end of the string,
 * searching backwards.
 * @return int|bool the position where the needle exists relative to the beginning of the haystack string
 * (independent of search direction or offset). Also note that string positions start at 0, and not 1. Returns FALSE
 * if the needle was not found.
 */

var_dump(strripos('ababacd', 'aB'));
var_dump(strripos('ababacd', 97, -6)); // 97 === 'a'
var_dump(strripos('ababacd', 'Y'));