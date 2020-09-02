<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:31
 *
 * int substr_compare ( string $main_str , string $str , int $offset [, int $length
 * [, bool $case_insensitivity = FALSE ]] )
 *
 * Binary safe comparison of two strings from an offset, up to length characters.
 * http://php.net/manual/en/function.substr-compare.php
 * substr_compare() compares main_str from position offset with str up to length characters.
 * @param string main_str the main string being compared.
 * @param string $str the secondary string being compared.
 * @param int $offset the start position for the comparison. If negative, it starts counting from the end of the
 * string.
 * @param int $length the length of the comparison. The default value is the largest of the length of the str
 * compared to the length of main_str less the offset.
 * @param bool $case_insensitivity if is TRUE, comparison is case insensitive.
 * @return int|bool returns < 0 if main_str from position offset is less than str, > 0 if it is greater than str, and
 * 0 if they are equal. If offset is equal to or greater than the length of main_str, or the length is set and is less
 * than 1 (prior to PHP 5.5.11), substr_compare() prints a warning and returns FALSE.
 */

var_dump(substr_compare('abcde', 'bc', 1, 2));
var_dump(substr_compare('abcde', 'de', -2, 2));
var_dump(substr_compare('abcde', 'bcg', 1, 2));
var_dump(substr_compare("abcde", "BC", 1, 2, true));
var_dump(substr_compare("abcde", "bc", 1, 3));
var_dump(substr_compare("abcde", "cd", 1, 2));
var_dump(substr_compare("abcde", "abc", 5, 1));