<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:25
 *
 * string str_rot13 ( string $str )
 *
 * Perform the rot13 transform on a string.
 * http://php.net/manual/en/function.str-rot13.php
 * Performs the ROT13 encoding on the str argument and returns the resulting string.
 * The ROT13 encoding simply shifts every letter by 13 places in the alphabet while leaving non-alpha characters
 * untouched. Encoding and decoding are done by the same function, passing an encoded string as argument will return
 * the original version.
 * @param string $str the input string.
 * @return string the ROT13 version of the given string.
 */

var_dump(str_rot13('PHP 4.3.0'));