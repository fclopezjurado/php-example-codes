<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:29
 *
 * int strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )
 *
 * Find the position of the first occurrence of a substring in a string.
 * http://php.net/manual/en/function.strpos.php
 * @param string $haystack the string to search in.
 * @param mixed $neddle if needle is not a string, it is converted to an integer and applied as the ordinal value of a
 * character.
 * @param int $offset if specified, search will start this number of characters counted from the beginning of the
 * string. If the offset is negative, the search will start this number of characters counted from the end of the
 * string.
 * @return int|bool the position of where the needle exists relative to the beginning of the haystack string
 * (independent of offset). Also note that string positions start at 0, and not 1. Returns FALSE if the needle was not
 * found.
 */

var_dump(strpos('abc', 'a'));
var_dump(strpos('abcdef abcdef', 'a', 1));
var_dump(strpos('example phrase', 97)); // 97 === 'a'
var_dump(strpos('example phrase', 97, 4));
var_dump(strpos('example phrase', 'y'));