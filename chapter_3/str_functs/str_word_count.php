<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:25
 *
 * Return information about words used in a string.
 * http://php.net/manual/en/function.str-word-count.php
 * Counts the number of words inside string. If the optional format is not specified, then the return value will be an
 * integer representing the number of words found. In the event the format is specified, the return value will be an
 * array, content of which is dependent on the format. The possible value for the format and the resultant outputs are
 * listed below.
 * For the purpose of this function, 'word' is defined as a locale dependent string containing alphabetic characters,
 * which also may contain, but not start with "'" and "-" characters.
 * @param string $string the string.
 * @param int format specify the return value of this function. The current supported values are:
 * 0 - returns the number of words found
 * 1 - returns an array containing all the words found inside the string
 * 2 - returns an associative array, where the key is the numeric position of the word inside the string and the value
 * is the actual word itself.
 * @param string $charlist a list of additional characters which will be considered as 'word'.
 * @return string[]|int an array or an integer, depending on the format chosen.
 */

$str = "Hello fri3nd, you're
       looking          good today!";

var_dump(str_word_count($str, 0));
var_dump(str_word_count($str, 1));
var_dump(str_word_count($str, 2));
var_dump(str_word_count($str, 1, 'àáãç3'));
var_dump(str_word_count($str));