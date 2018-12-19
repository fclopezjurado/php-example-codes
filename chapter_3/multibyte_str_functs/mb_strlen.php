<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:50
 *
 * int mb_strlen ( string $str [, string $encoding = mb_internal_encoding() ] )
 *
 * Get string length.
 * http://php.net/manual/en/function.mb-strlen.php
 * @param string $str the string being checked for length.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return int|bool the number of characters in string str having character encoding encoding. A multi-byte character
 * is counted as 1. Returns FALSE if the given encoding is invalid.
 */

mb_internal_encoding('UTF-8');

var_dump(mb_strlen('über'));
var_dump(mb_strlen('español','UTF-8'));
var_dump(mb_strlen('Hello!', 'ASCII'));
var_dump(mb_strlen("\x00H\x00e\x00l\x00l\x00o\x00!", 'UTF-16'));
var_dump(mb_strlen("\xC2\xA1Hola!", 'UTF-8'));
var_dump(mb_strlen("\xE4\xBD\xA0\xE5\xA5\xBD!", 'UTF-8'));
var_dump(mb_strlen("\xC4\xE3\xBA\xC3\xA3\xA1", 'GB2312'));
var_dump(mb_strlen('español','DFADFASFASD'));