<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:52
 *
 * int mb_substr_count ( string $haystack , string $needle [, string $encoding = mb_internal_encoding() ] )
 *
 * Count the number of substring occurrences.
 * http://php.net/manual/en/function.mb-substr-count.php
 * @param string $haystack the string being checked.
 * @param string $needle the string being found.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return int the number of times the needle substring occurs in the haystack string.
 */

var_dump(mb_substr_count('This is a test', 'is'));
var_dump(mb_substr_count('élite', 'éli'));
var_dump(mb_substr_count('élite', 'it','UTF-16'));
var_dump(mb_substr_count('élite', 'ite','UTF-8'));
var_dump(mb_substr_count('\xdcber', 'cb','ISO-8859-1'));
var_dump(mb_substr_count('\xdcber', 'be', 'ISO-8859-1'));
var_dump(mb_substr_count('español','pañ','UTF-8'));