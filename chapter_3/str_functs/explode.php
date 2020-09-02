<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:16
 *
 * array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )
 *
 * Split a string by a string
 * http://php.net/manual/en/function.explode.php
 * Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed
 * by the string delimiter.
 * @param string $delimiter the boundary string.
 * @param string $string the input string.
 * @param string $limit if it is set and positive, the returned array will contain a maximum of limit elements with
 * the last element containing the rest of string. If the limit parameter is negative, all components except the
 * last -limit are returned. If the limit parameter is zero, then this is treated as 1.
 * @return array|bool an array of strings created by splitting the string parameter on boundaries formed by the
 * delimiter. If delimiter is an empty string (""), explode() will return false. If delimiter contains a value that is
 * not contained in string and a negative limit is used, then an empty array will be returned, otherwise an array
 * containing string will be returned.
 */

$pizza  = 'piece1 piece2 piece3 piece4 piece5 piece6';
$pieces = explode(' ', $pizza);
var_dump($pieces[0]);
var_dump($pieces[1]);

$data = 'foo:*:1023:1000::/home/foo:/bin/sh';
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(':', $data);
var_dump($user);
var_dump($pass);

/**
 * A string that doesn't contain the delimiter will simply return a one-length array of the original string.
 */
$input1 = 'hello';
$input2 = 'hello,there';
$input3 = ',';
var_dump(explode(',', $input1));
var_dump(explode(',', $input2));
var_dump(explode(',', $input3));

$str = 'one|two|three|four';

/**
 * Positive limit
 */
print_r(explode('|', $str, 2));

/**
 * Negative limit (since PHP 5.1)
 */
print_r(explode('|', $str, -1));
