<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:29
 *
 * Find the position of the last occurrence of a substring in a string.
 * http://php.net/manual/en/function.strrpos.php
 * Find the numeric position of the last occurrence of needle in the haystack string.
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

// from the end. Result: int(17)
var_dump(strrpos('0123456789a123456789b123456789c', '7', -5));

// string. Result: int(27)
var_dump(strrpos('0123456789a123456789b123456789c', '7', 20));

var_dump(strrpos('0123456789a123456789b123456789c', '7', 28));
var_dump(strrpos('0123456789a123456789b123456789c', 'y'));