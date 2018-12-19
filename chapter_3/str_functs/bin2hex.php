<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:12
 *
 * string bin2hex ( string $str )
 *
 * Convert binary data into hexadecimal representation. Returns an ASCII string containing the hexadecimal
 * representation of str. The conversion is done byte-wise with the high-nibble first.
 * http://php.net/manual/en/function.bin2hex.php
 * @param string $str a string.
 * @return string the hexadecimal representation of the given string.
 */

var_dump(bin2hex('Hello World!'));