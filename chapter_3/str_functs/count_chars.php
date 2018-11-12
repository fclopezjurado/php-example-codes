<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:15
 *
 * Counts the number of occurrences of every byte-value (0..255) in string and returns it in various ways.
 * http://php.net/manual/en/function.count-chars.php
 * @param string $string the examined string.
 * @param int $mode depending on mode, count_chars() returns one of the following:
 * 0 - an array with the byte-value as key and the frequency of every byte as value.
 * 1 - same as 0 but only byte-values with a frequency greater than zero are listed.
 * 2 - same as 0 but only byte-values with a frequency equal to zero are listed.
 * 3 - a string containing all unique characters is returned.
 * 4 - a string containing all not used characters is returned.
 * @return mixed.
 */

/**
 * @param $string
 * @return int
 */
function uniChar($string)
{
    $two = strtolower(str_replace(' ', '', $string));
    $res = count(count_chars($two, 1));
    return $res;
}

$data = 'Two Ts and one F.';

foreach (count_chars($data, 1) as $i => $val) {
    var_dump("There were $val instance(s) of \"" . chr($i). "\" in the string.");
}

var_dump(unichar('bob'));
var_dump(unichar('Invisibility'));
var_dump(unichar('The quick brown fox slyly jumped over the lazy dog'));