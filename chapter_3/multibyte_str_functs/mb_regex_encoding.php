<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:48
 *
 * mixed mb_regex_encoding ([ string $encoding = mb_regex_encoding() ] )
 *
 * Set/Get character encoding for multi byte regex.
 * http://php.net/manual/en/function.mb-regex-encoding.php
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return string|bool If encoding is set, then Returns TRUE on success or FALSE on failure. In this case, the internal
 * character encoding is NOT changed. If encoding is omitted, then the current character encoding name for a
 * multi byte regex is returned.
 * NOTE: Function returns E_WARNING if character encoding provided in $encoding is wrong.
 */

var_dump(mb_regex_encoding());
var_dump(mb_regex_encoding('UTF-8'));
var_dump(mb_regex_encoding('CP936'));