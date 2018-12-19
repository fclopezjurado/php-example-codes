<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:41
 *
 * string mb_encode_numericentity ( string $str , array $convmap [, string $encoding = mb_internal_encoding()
 * [, bool $is_hex = FALSE ]] )
 *
 * Encode character to HTML numeric string reference.
 * http://php.net/manual/en/function.mb-encode-numericentity.php
 * Converts specified character codes in string str from character code to HTML numeric character reference.
 * @param string $str the string being encoded.
 * @param array $convmap specifies code area to convert.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @param bool $is_hex
 * @return string the converted string.
 */

var_dump(mb_encode_numericentity ('sāш日', array (0x0, 0xffff, 0, 0xffff), 'UTF-8'));