<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:26
 *
 * string stripcslashes ( string $str )
 *
 * Un-quote string quoted with addcslashes().
 * http://php.net/manual/en/function.stripcslashes.php
 * Returns a string with backslashes stripped off. Recognizes C-like \n, \r ..., octal and hexadecimal representation.
 * @param string $str the string to be unescaped.
 * @return string returns the unescaped string.
 */

var_dump(stripcslashes('\n'));
var_dump(stripcslashes('He\xallo'));
var_dump(stripcslashes('H\xaello'));
var_dump(stripcslashes('H\xa0ello'));
var_dump(stripcslashes('\f\o\o\[ \]'));
var_dump(stripcslashes('\zoo\[\'.\'\]'));