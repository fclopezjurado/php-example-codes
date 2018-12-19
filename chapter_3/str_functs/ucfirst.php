<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:32
 *
 * string ucfirst ( string $str )
 *
 * Make a string's first character uppercase.
 * http://php.net/manual/en/function.ucfirst.php
 * Returns a string with the first character of str capitalized, if that character is alphabetic.
 * Note that 'alphabetic' is determined by the current locale. For instance, in the default "C" locale characters such
 * as umlaut-a (ä) will not be converted.
 * @param string $str the input string.
 * @return string the resulting string.
 */

var_dump(ucfirst('hello world!'));
var_dump(ucfirst('HELLO WORLD!'));
var_dump(ucfirst(strtolower('HELLO WORLD!')));