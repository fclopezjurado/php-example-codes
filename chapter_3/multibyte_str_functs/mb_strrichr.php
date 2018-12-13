<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:50
 *
 * Finds the last occurrence of a character in a string within another, case insensitive.
 * http://php.net/manual/en/function.mb-strrichr.php
 * mb_strrichr() finds the last occurrence of needle in haystack and returns the portion of haystack.
 * Unlike mb_strrchr(), mb_strrichr() is case-insensitive. If needle is not found, it returns FALSE.
 * @param string $haystack the string from which to get the last occurrence of needle.
 * @param string $needle the string to find in haystack.
 * @param bool $part determines which portion of haystack this function returns. If set to TRUE, it returns all of
 * haystack from the beginning to the last occurrence of needle. If set to FALSE, it returns all of haystack from the
 * last occurrence of needle to the end.
 * @param string $encoding character encoding name to use. If it is omitted, internal character encoding is used.
 * @return string returns the portion of haystack. or FALSE if needle is not found.
 */

var_dump(mb_strrichr('española','ol',false));
var_dump(mb_strrichr('española','ol',true,'UTF-8'));
var_dump(mb_strrichr('española','OL',false,'UTF-8'));
var_dump(mb_strrichr('española','an',false,'UTF-8'));