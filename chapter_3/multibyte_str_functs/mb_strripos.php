<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:50
 *
 * Finds position of last occurrence of a string within another, case insensitive.
 * http://php.net/manual/en/function.mb-strripos.php
 * mb_strripos() performs multi-byte safe strripos() operation based on number of characters. needle position is
 * counted from the beginning of haystack. First character's position is 0. Second character position is 1. Unlike
 * mb_strrpos(), mb_strripos() is case-insensitive.
 * @param string $haystack the string from which to get the position of the last occurrence of needle.
 * @param string $needle the string to find in haystack.
 * @param int $offset the position in haystack to start searching.
 * @param string $encoding character encoding name to use. If it is omitted, internal character encoding is used.
 * @return int|bool the numeric position of the last occurrence of needle in the haystack string, or FALSE if needle
 * is not found.
 */

var_dump(mb_strripos('español','ol',0));
var_dump(mb_strripos('español','OL',0,'UTF-8'));
var_dump(mb_strripos('español','an',0,'UTF-8'));
var_dump(mb_strripos('español','pa',4,'UTF-8'));
var_dump(mb_strripos('español','OL',0,'ISO-8859-2'));
var_dump(mb_strripos('español','an',0,'ISO-8859-2'));
var_dump(mb_strripos('español','pa',4,'ISO-8859-2'));
var_dump(mb_strripos('español','OL',0,'ASCII'));
var_dump(mb_strripos('español','an',0,'ASCII'));
var_dump(mb_strripos('español','pa',4,'ASCII'));