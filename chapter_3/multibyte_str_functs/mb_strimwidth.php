<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:50
 *
 * Get truncated string with specified width.
 * http://php.net/manual/en/function.mb-strimwidth.php
 * @param string $str the string being decoded.
 * @param int $start the start position offset. Number of characters from the beginning of string
 * (first character is 0), or if start is negative, number of characters from the end of the string.
 * @param int $width the width of the desired trim. Negative widths count from the end of the string.
 * @param string $trimmarker a string that is added to the end of string when string is truncated.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return string the truncated string. If trimmarker is set, trimmarker replaces the last chars to match the width.
 */

var_dump(mb_strimwidth('Hello World', 0, 10, '...'));