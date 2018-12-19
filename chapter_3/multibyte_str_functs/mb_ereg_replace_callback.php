<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:41
 *
 * string mb_ereg_replace_callback ( string $pattern , callable $callback , string $string [, string $option = "msr" ] )
 *
 * Perform a regular expresssion seach and replace with multi byte support using a callback.
 * http://php.net/manual/en/function.mb-ereg-replace-callback.php
 * Scans string for matches to pattern, then replaces the matched text with the output of callback function.
 * The behavior of this function is almost identical to mb_ereg_replace(), except for the fact that instead of
 * replacement parameter, one should specify a callback.
 * @param string $pattern The regular expression pattern. Multi byte characters may be used in pattern.
 * @param callable $callback a callback that will be called and passed an array of matched elements in the subject
 * string. The callback should return the replacement string. You'll often need the callback function for a
 * mb_ereg_replace_callback() in just one place. In this case you can use an anonymous function to declare the
 * callback within the call to mb_ereg_replace_callback(). By doing it this way you have all information for the call
 * in one place and do not clutter the function namespace with a callback function's name not used anywhere else.
 * @param string $string the string being checked.
 * @param string $option the search option. See mb_regex_set_options() for explanation.
 * @return string|bool the resultant string on success, or FALSE on error.
 */

$text = "April fools day is 04/01/2002\n";
$text .= "Last christmas was 12/24/2001\n";

function next_year($matches)
{
    return $matches[1] . ($matches[2] + 1);
}

var_dump(mb_ereg_replace_callback("(\d{2}/\d{2}/)(\d{4})", 'next_year', $text));


$text = "April fools day is 04/01/2002\n";
$text .= "Last christmas was 12/24/2001\n";

var_dump(mb_ereg_replace_callback("(\d{2}/\d{2}/)(\d{4})", function ($matches) {
    return $matches[1] . ($matches[2] + 1);
}, $text));