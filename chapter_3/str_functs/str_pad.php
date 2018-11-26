<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:24
 *
 * Pad a string to a certain length with another string.
 * http://php.net/manual/en/function.str-pad.php
 * This function returns the input string padded on the left, the right, or both sides to the specified padding length.
 * If the optional argument pad_string is not supplied, the input is padded with spaces, otherwise it is padded with
 * characters from pad_string up to the limit.
 * @param string $input the input string.
 * @param int $pad_length if the value of pad_length is negative, less than, or equal to the length of the input
 * string, no padding takes place, and input will be returned.
 * @param string $pad_string may be truncated if the required number of padding characters can't be evenly divided
 * by the pad_string's length.
 * @param int $pad_type optional argument pad_type can be STR_PAD_RIGHT, STR_PAD_LEFT, or STR_PAD_BOTH. If pad_type is
 * not specified it is assumed to be STR_PAD_RIGHT.
 * @return string the padded string.
 */

$input = 'Alien';
var_dump(str_pad($input, 10));
var_dump(str_pad($input, 10, '-=', STR_PAD_LEFT));
var_dump(str_pad($input, 10, '_', STR_PAD_BOTH));
var_dump(str_pad($input,  6, '___'));
var_dump(str_pad($input,  3, "*"));