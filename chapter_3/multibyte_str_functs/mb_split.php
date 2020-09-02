<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:49
 *
 * array mb_split ( string $pattern , string $string [, int $limit = -1 ] )
 *
 * Split multi byte string using regular expression.
 * http://php.net/manual/en/function.mb-split.php
 * Split a multi byte string using regular expression pattern and returns the result as an array.
 * @param string $pattern the regular expression pattern.
 * @param string $string the string being split.
 * @param int $limit if optional parameter limit is specified, it will be split in limit elements as maximum.
 * @return array the result as an array.
 */

mb_regex_encoding('UTF-8');
mb_internal_encoding('UTF-8');
var_dump(mb_split('、',"日、に、本、ほん、語、ご"));
var_dump(mb_split('、',"日、に、本、ほん、語、ご", 3));
var_dump(mb_split('、',"日、に、本、ほん、語、ご", -6));