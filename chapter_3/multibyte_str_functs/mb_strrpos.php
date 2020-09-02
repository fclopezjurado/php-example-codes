<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:51
 *
 * int mb_strrpos ( string $haystack , string $needle [, int $offset = 0 [, string $encoding = mb_internal_encoding() ]] )
 *
 * Find position of last occurrence of a string in a string.
 * http://php.net/manual/en/function.mb-strrpos.php
 * Performs a multi byte safe strrpos() operation based on the number of characters. needle position is counted from
 * the beginning of haystack. First character's position is 0. Second character position is 1.
 * @param string $haystack the string being checked, for the last occurrence of needle.
 * @param string $needle the string to find in haystack.
 * @param int $offset may be specified to begin searching an arbitrary number of characters into the string. Negative
 * values will stop searching at an arbitrary point prior to the end of the string.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return int|bool the numeric position of the last occurrence of needle in the haystack string. If needle is not
 * found, it returns FALSE.
 */

var_dump(strlen('Hallo, Herr Gött'));
var_dump(mb_strrpos('Hallo, Herr Gött','ött',13));
var_dump(mb_strrpos('Hallo, Herr Gött','ött',-4));
var_dump(mb_strrpos('Hallo, Herr Gött','ött',-5));