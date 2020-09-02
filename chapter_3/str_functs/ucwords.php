<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:32
 *
 * string ucwords ( string $str [, string $delimiters = " \t\r\n\f\v" ] )
 *
 * Uppercase the first character of each word in a string.
 * http://php.net/manual/en/function.ucwords.php
 * The definition of a word is any string of characters that is immediately after any character listed in the
 * delimiters parameter (By default these are: space, form-feed, newline, carriage return, horizontal tab, and
 * vertical tab) (" \t\r\n\f\v").
 * @param string $str the input string.
 * @param string $delimiters the optional delimiters contains the word separator characters.
 * @return string the modified string.
 */

var_dump(ucwords('hello world!'));
var_dump(ucwords('HELLO WORLD!'));
var_dump(ucwords(strtolower('HELLO WORLD!')));
var_dump(ucwords('hello|world!'));
var_dump(ucwords('hello|world!', "|"));