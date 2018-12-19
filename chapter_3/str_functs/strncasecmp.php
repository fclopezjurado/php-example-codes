<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:27
 *
 * int strncasecmp ( string $str1 , string $str2 , int $len )
 *
 * Binary safe case-insensitive string comparison of the first n characters
 * http://php.net/manual/en/function.strncasecmp.php
 * This function is similar to strcasecmp(), with the difference that you can specify the (upper limit of the) number
 * of characters from each string to be used in the comparison.
 * @param string $str1 the first string.
 * @param string $str2 the second string.
 * @param int $len the length of strings to be used in the comparison.
 * @return int similar to other string comparison functions, this one returns < 0 if str1 is less than str2 > 0 if
 * str1 is greater than str2, and 0 if they are equal.
 */

var_dump(strncasecmp('reD', 'redent', 3));
var_dump(strncasecmp('redmyshirt', 'reDent', 4));
var_dump(strncasecmp('red', 'reDent', 4));