<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:31
 *
 * Return part of a string.
 * http://php.net/manual/en/function.substr.php
 * Returns the portion of string specified by the start and length parameters.
 * @param string $string the input string. Must be one character or longer.
 * @param int $start if start is non-negative, the returned string will start at the start'th position in string,
 * counting from zero. For instance, in the string 'abcdef', the character at position 0 is 'a', the character at
 * position 2 is 'c', and so forth. If start is negative, the returned string will start at the start'th character
 * from the end of string. If string is less than start characters long, FALSE will be returned.
 * @param int $length if length is given and is positive, the string returned will contain at most length characters
 * beginning from start (depending on the length of string).
 * If length is given and is negative, then that many characters will be omitted from the end of string (after the
 * start position has been calculated when a start is negative). If start denotes the position of this truncation or
 * beyond, FALSE will be returned.
 * If length is given and is 0, FALSE or NULL, an empty string will be returned.
 * If length is omitted, the substring starting from start until the end of the string will be returned.
 * @return string|bool the extracted part of string; or FALSE on failure, or an empty string.
 */

class Apple 
{
    public function __toString() 
    {
        return "green";
    }
}

var_dump(substr('abcdef', 1));
var_dump(substr('abcdef', 1, 3));
var_dump(substr('abcdef', 0, 4));
var_dump(substr('abcdef', 0, 8));
var_dump(substr('abcdef', -1, 1));

var_dump(substr('pear', 0, 2));
var_dump(substr(54321, 0, 2));
var_dump(substr(new apple(), 0, 2));
var_dump(substr(true, 0, 1));
var_dump(substr(false, 0, 1));
var_dump(substr("", 0, 1));
var_dump(substr(1.2e3, 0, 4));
var_dump(substr('a', 2));
var_dump(substr("abcdef", -1));
var_dump(substr("abcdef", -2));
var_dump(substr("abcdef", -3, 1));
var_dump(substr("abcdef", 0, -1));
var_dump(substr("abcdef", 2, -1));
var_dump(substr("abcdef", 4, -4));
var_dump(substr("abcdef", -3, -1));