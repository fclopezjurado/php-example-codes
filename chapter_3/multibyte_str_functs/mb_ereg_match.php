<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:41
 *
 * bool mb_ereg_match ( string $pattern , string $string [, string $option = "msr" ] )
 *
 * Regular expression match for multi byte string.
 * http://php.net/manual/en/function.mb-ereg-match.php
 * @param string $pattern the regular expression pattern.
 * @param string $string the string being evaluated.
 * @param string $option the search option. See mb_regex_set_options() for explanation.
 * @return bool TRUE if string matches the regular expression pattern, FALSE if not.
 */

var_dump(mb_ereg_match("a", "some apples", 'msr'));
var_dump(mb_ereg_match("a", "a kiwi", 'msr'));
var_dump(mb_ereg_match(".*a", "some apples", 'msr'));