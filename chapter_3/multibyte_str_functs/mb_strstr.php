<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:51
 *
 * Finds the first occurrence of needle in haystack and returns the portion of haystack. If needle is not found, it
 * returns FALSE.
 * http://php.net/manual/en/function.mb-strstr.php
 * @param string $haystack the string from which to get the first occurrence of needle.
 * @param string $needle the string to find in haystack.
 * @param bool $before_needle determines which portion of haystack this function returns. If set to TRUE, it returns
 * all of haystack from the beginning to the first occurrence of needle (excluding needle). If set to FALSE, it returns
 * all of haystack from the first occurrence of needle to the end (including needle).
 * @param string $encoding character encoding name to use. If it is omitted, internal character encoding is used.
 * @return string|bool the portion of haystack, or FALSE if needle is not found.
 */

var_dump(mb_strstr('española','ol',false));
var_dump(mb_strstr('española','ol',true,'UTF-8'));
var_dump(mb_strstr('española','OL',false,'UTF-8'));
var_dump(mb_strstr('española','an',false,'UTF-8'));