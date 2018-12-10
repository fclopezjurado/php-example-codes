<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:31
 *
 * Count the number of substring occurrences.
 * http://php.net/manual/en/function.substr-count.php
 * @param string $haystack the string to search in.
 * @param string $needle the substring to search for.
 * @param int $offset the offset where to start counting. If the offset is negative, counting starts from the end of
 * the string.
 * @param int $length the maximum length after the specified offset to search for the substring. It outputs a warning
 * if the offset plus the length is greater than the haystack length. A negative length counts from the end of haystack.
 * @return int number of substring occurrences.
 */

var_dump(substr_count('This is a test', 'is'));
var_dump(substr_count('This is a test', 'is', 3));
var_dump(substr_count('This is a test', 'is', 3, 3));

// generates a warning because 5 + 10 > 14
var_dump(substr_count('This is a test', 'is', 5, 10));

// prints only 1, because it doesn't count overlapped substrings
var_dump(substr_count('gcdgcdgcd', 'gcdgcd'));

// prints only 1, because the search is in the last four chars
var_dump(substr_count('This is a test', 'te', -4));

// print only 1, because the search is in the last for chars, restricted in the 2 first of them.
var_dump(substr_count('This is a test', 'te', -4, -2));