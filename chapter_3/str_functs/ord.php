<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:21
 *
 * Convert the first byte of a string to a value between 0 and 255.
 * Interprets the binary value of the first byte of string as an unsigned integer between 0 and 255.
 * If the string is in a single-byte encoding, such as ASCII, ISO-8859, or Windows 1252, this is equivalent to
 * returning the position of a character in the character set's mapping table. However, note that this function is not
 * aware of any string encoding, and in particular will never identify a Unicode code point in a multi-byte encoding
 * such as UTF-8 or UTF-16.
 * http://php.net/manual/en/function.ord.php
 * @param string $string a character
 * @return int an integer between 0 and 255.
 */

$str = ""; // elePHPant char (is not visible).
var_dump(ord(PHP_EOL));

for ($pos = 0; $pos < strlen($str); $pos++) {
    $byte = substr($str, $pos);
    var_dump('Byte ' . $pos . ' of $str has value ' . ord($byte));
}