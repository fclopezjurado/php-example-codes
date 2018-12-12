<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:50
 *
 * Finds position of first occurrence of a string within another, case insensitive.
 * http://php.net/manual/en/function.mb-stripos.php
 * mb_stripos() returns the numeric position of the first occurrence of needle in the haystack string. Unlike
 * mb_strpos(), mb_stripos() is case-insensitive. If needle is not found, it returns FALSE.
 * @param string $haystack the string from which to get the position of the first occurrence of needle.
 * @param string $needle the string to find in haystack.
 * @param int $offset the position in haystack to start searching. A negative offset counts from the end of the string.
 * @param string $encoding character encoding name to use. If it is omitted, internal character encoding is used.
 * @return int|bool the numeric position of the first occurrence of needle in the haystack string, or FALSE if needle
 * is not found.
 */

var_dump(mb_stripos('español', 'ol', 0));
var_dump(mb_stripos('español', 'OL', 0, 'UTF-8'));
var_dump(mb_stripos('español', 'an', 0, 'UTF-8'));
var_dump(mb_stripos('español', 'pa', 4, 'UTF-8'));