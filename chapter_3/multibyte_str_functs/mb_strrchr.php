<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:50
 *
 * string mb_strrchr ( string $haystack , string $needle [, bool $part = FALSE [, string $encoding = mb_internal_encoding() ]] )
 *
 * Finds the last occurrence of a character in a string within another.
 * http://php.net/manual/en/function.mb-strrchr.php
 * mb_strrchr() finds the last occurrence of needle in haystack and returns the portion of haystack. If needle is not
 * found, it returns FALSE.
 * @param string $haystack the string from which to get the last occurrence of needle.
 * @param string $needle the string to find in haystack.
 * @param bool $part determines which portion of haystack this function returns. If set to TRUE, it returns all of
 * haystack from the beginning to the last occurrence of needle. If set to FALSE, it returns all of haystack from the
 * last occurrence of needle to the end.
 * @param string $encoding character encoding name to use. If it is omitted, internal character encoding is used.
 * @return string|bool returns the portion of haystack. or FALSE if needle is not found.
 */

var_dump(mb_strrchr('española','ol',false));
var_dump(mb_strrchr('española','ol',true,'UTF-8'));
var_dump(mb_strrchr('española','OL',false,'UTF-8'));
var_dump(mb_strrchr('española','an',false,'UTF-8'));