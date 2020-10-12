<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:25
 *
 * array str_split ( string $string [, int $split_length = 1 ] )
 *
 * Converts a string to an array.
 * http://php.net/manual/en/function.str-split.php
 * @param string the input string.
 * @param int $split_length maximum length of the chunk.
 * @return string[]|bool if the optional split_length parameter is specified, the returned array will be broken down
 * into chunks with each being split_length in length, otherwise each chunk will be one character in length. False is
 * returned if split_length is less than 1. If the split_length length exceeds the length of string, the entire string
 * is returned as the first (and only) array element.
 */

$str = 'Hello Friend';
var_dump(str_split($str));
var_dump(str_split($str, 3));
var_dump(str_split($str, 0)); // PHP Warning and return false
var_dump(str_split($str, -1)); // PHP Warning and return false
var_dump(str_split($str, 13)); // everything in an array element