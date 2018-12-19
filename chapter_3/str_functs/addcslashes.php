<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:11
 *
 * string addcslashes ( string $str , string $charlist )
 *
 * Returns a string with backslashes before characters that are listed in char list parameter.
 * http://php.net/manual/en/function.addcslashes.php
 * @param string $str the string to be scaped.
 * @param string $charlist a list of characters to be escaped. If charlist contains characters \n, \r etc., they are
 * converted in C-like style, while other non-alphanumeric characters with ASCII codes lower than 32 and higher than
 * 126 converted to octal representation.
 * @return string the escaped string.
 */

var_dump(addcslashes('foo[ ]', 'A..z'));

/**
 * PHP warning: z..A range needs to be incrementing.
 */
var_dump(addcslashes('zoo[\'.\']', 'z..A'));

/**
 * char list like "\0..\37", which would escape all characters with ASCII code between 0 and 31.
 */
var_dump(addcslashes('foo[ ]', "\0..\37!@\177..\377"));