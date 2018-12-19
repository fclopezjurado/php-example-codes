<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:50
 *
 * string mb_stristr ( string $haystack , string $needle [, bool $before_needle = FALSE
 * [, string $encoding = mb_internal_encoding() ]] )
 *
 * Finds first occurrence of a string within another, case insensitive.
 * http://php.net/manual/en/function.mb-stristr.php
 * mb_stristr() finds the first occurrence of needle in haystack and returns the portion of haystack. Unlike
 * mb_strstr(), mb_stristr() is case-insensitive. If needle is not found, it returns FALSE.
 * @param string $haystack the string from which to get the first occurrence of needle.
 * @param string $needle the string to find in haystack.
 * @param bool $before_needle determines which portion of haystack this function returns. If set to TRUE, it returns
 * all of haystack from the beginning to the first occurrence of needle (excluding needle). If set to FALSE, it returns
 * all of haystack from the first occurrence of needle to the end (including needle).
 * @param string $encoding character encoding name to use. If it is omitted, internal character encoding is used.
 * @return string|bool the portion of haystack, or FALSE if needle is not found.
 */

var_dump(mb_stristr('española','ol',false));
var_dump(mb_stristr('española','ol',true,'UTF-8'));
var_dump(mb_stristr('española','OL',false,'UTF-8'));
var_dump(mb_stristr('española','an',false,'UTF-8'));