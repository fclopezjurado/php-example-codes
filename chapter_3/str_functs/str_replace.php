<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:25
 *
 * Replace all occurrences of the search string with the replacement string.
 * http://php.net/manual/en/function.str-ireplace.php
 * This function returns a string or an array with all occurrences of search in subject replaced with the given replace
 * value. If you don't need fancy replacing rules (like regular expressions), you should always use this function
 * instead of preg_replace().
 * If search and replace are arrays, then "str_replace()" takes a value from each array and uses them to search and
 * replace on subject. If replace has fewer values than search, then an empty string is used for the rest of
 * replacement values. If search is an array and replace is a string, then this replacement string is used for every
 * value of search. The converse would not make sense, though.
 * If search or replace are arrays, their elements are processed first to last.
 * @param string[]|string $search the value being searched for, otherwise known as the needle. An array may be used to
 * designate multiple needles.
 * @param string[]|string $replace the replacement value that replaces found search values. An array may be used to
 * designate multiple replacements.
 * @param string|string $subject the string or array being searched and replaced on, otherwise known as the haystack.
 * If subject is an array, then the search and replace is performed with every entry of subject, and the return value
 * is an array as well.
 * @param int $count if passed, this will be set to the number of replacements performed.
 * @return string[]|string an string or an array of replacements.
 * NOTE: This function is binary-safe.
 */

var_dump(str_replace("%body%", "black", '<body text="%body%">'));
var_dump(str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '', 'Hello World of PHP'));
var_dump(str_replace(['fruits', 'vegetables', 'fiber'], ['pizza', 'beer', 'ice cream'], 
    'You should eat fruits, vegetables, and fiber every day.'));
var_dump(str_replace('ll', '', 'good golly miss molly!', $count));
var_dump($count);