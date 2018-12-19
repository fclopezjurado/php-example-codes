<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:52
 *
 * string mb_substr ( string $str , int $start [, int $length = NULL [, string $encoding = mb_internal_encoding() ]] )
 *
 * Get part of string.
 * http://php.net/manual/en/function.mb-substr.php
 * Performs a multi-byte safe substr() operation based on number of characters. Position is counted from the beginning
 * of str. First character's position is 0. Second character position is 1, and so on.
 * @param string $str the string to extract the substring from.
 * @param int $start if start is non-negative, the returned string will start at the start'th position in str, counting
 * from zero. For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is
 * 'c', and so forth.
 * If start is negative, the returned string will start at the start'th character from the end of str.
 * @param int $length maximum number of characters to use from str. If omitted or NULL is passed, extract all
 * characters to the end of the string.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return string the portion of str specified by the start and length parameters.
 */

mb_internal_encoding('UTF-8');

var_dump(mb_substr('élite', 3));
var_dump(mb_substr('élite', -3));
var_dump(mb_substr('élite', 3, 1));
var_dump(mb_substr("\xdcber", 2, mb_strlen("\xdcber"), 'ISO-8859-1'));
var_dump(mb_substr("\xdcber", -3, mb_strlen("\xdcber"), 'ISO-8859-1'));
var_dump(mb_substr("español",3,3,"UTF-8"));