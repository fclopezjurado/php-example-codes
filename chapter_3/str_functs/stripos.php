<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:26
 *
 * Find the position of the first occurrence of a case-insensitive substring in a string
 * http://php.net/manual/en/function.stripos.php
 * Find the numeric position of the first occurrence of needle in the haystack string. Unlike the strpos(), stripos()
 * is case-insensitive.
 * @param string $haystack the string to search.
 * @param mixed $needle note that the needle may be a string of one or more characters. If needle is not a string, it
 * is converted to an integer and applied as the ordinal value of a character.
 * @param int $offset if specified, search will start this number of characters counted from the beginning of the
 * string. If the offset is negative, the search will start this number of characters counted from the end of the
 * string.
 * @return int|bool the position of where the needle exists relative to the beginning of the haystack string
 * (independent of offset). Also note that string positions start at 0, and not 1. Returns false if the needle was not
 * found.
 */

var_dump(stripos('xyz', 'a'));
var_dump(stripos('ABC', 'a'));
var_dump(stripos('example phrase', 'a', 5));
var_dump(stripos('example phrase', 97, 5)); // 97 === 'a'