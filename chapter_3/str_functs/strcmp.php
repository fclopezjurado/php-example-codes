<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:26
 *
 * int strcmp ( string $str1 , string $str2 )
 *
 * Binary safe string comparison. This comparison is case-sensitive.
 * http://php.net/manual/en/function.strcmp.php
 * @param string $str1 the first string.
 * @param string $str2 the second string.
 * @return int < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.
 */

var_dump(strcmp('Hello', 'hello'));
var_dump(strcmp('hello', 'Hello'));
var_dump(strcmp('hallo', 'hallo'));