<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:49
 *
 * Get part of string.
 * http://php.net/manual/en/function.mb-strcut.php
 * mb_strcut() extracts a substring from a string similarly to mb_substr(), but operates on bytes instead of
 * characters. If the cut position happens to be between two bytes of a multi-byte character, the cut is performed
 * starting from the first byte of that character. This is also the difference to the substr() function, which would
 * simply cut the string between the bytes and thus result in a malformed byte sequence.
 * @param string $str the string being cut.
 * @param int $start if start is non-negative, the returned string will start at the start'th byte position in str,
 * counting from zero. For instance, in the string 'abcdef', the byte at position 0 is 'a', the byte at position 2 is
 * 'c', and so forth. If start is negative, the returned string will start at the start'th byte from the end of str.
 * @param int $length length in bytes. If omitted or NULL is passed, extract all bytes to the end of the string.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return string the portion of str specified by the start and length parameters.
 */

var_dump(mb_strcut(utf8_encode('Déjà_vu'), 0, 4, 'UTF-8'));
var_dump(mb_strcut(utf8_encode('Déjà_vu'), 1, 4, 'UTF-8'));
var_dump(mb_strcut(utf8_encode('Déjà_vu'), 2, 4, 'UTF-8'));
var_dump(mb_strcut(utf8_encode('Déjà_vu'), 3, 4, 'UTF-8'));
var_dump(mb_strcut(utf8_encode('Déjà_vu'), 4, 4, 'UTF-8'));
var_dump(mb_strcut(utf8_encode('Déjà_vu'), -2, 2, 'UTF-8'));
var_dump(mb_strcut(utf8_encode('Déjà_vu'), -2, -1, 'UTF-8'));
var_dump(mb_strcut('I_ROHA', 1, 2));
var_dump(mb_substr('I_ROHA', 1, 2));