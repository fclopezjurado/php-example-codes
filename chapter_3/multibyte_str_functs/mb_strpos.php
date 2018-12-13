<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:50
 *
 * Find position of first occurrence of string in a string.
 * http://php.net/manual/en/function.mb-strpos.php
 * Performs a multi-byte safe strpos() operation based on number of characters. The first character's position is 0,
 * the second character position is 1, and so on.
 * @param string $haystack the string being checked.
 * @param string $needle the string to find in haystack. In contrast with strpos(), numeric values are not applied as
 * the ordinal value of a character.
 * @param int $offset the search offset. If it is not specified, 0 is used. A negative offset counts from the end of
 * the string.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return int|bool the numeric position of the first occurrence of needle in the haystack string. If needle is not
 * found, it returns FALSE.
 */

var_dump(mb_strpos('español','ol',0));
var_dump(mb_strpos('español','OL',0,'UTF-8'));
var_dump(mb_strpos('español','an',0,'UTF-8'));
var_dump(mb_strpos('español','pa',4,'UTF-8'));