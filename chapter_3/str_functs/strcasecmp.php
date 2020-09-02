<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:25
 *
 * int strcasecmp ( string $str1 , string $str2 )
 *
 * Binary safe case-insensitive string comparison.
 * http://php.net/manual/en/function.strcasecmp.php
 * @param string $str1 the first string.
 * @param string $str2 the second string.
 * @return int < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.
 */

var_dump(strcasecmp('Hello', 'hello'));
var_dump(strcasecmp('hallo', 'Hello'));
var_dump(strcasecmp('hello', 'hallo'));