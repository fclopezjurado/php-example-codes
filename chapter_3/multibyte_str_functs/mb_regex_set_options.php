<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:48
 *
 * string mb_regex_set_options ([ string $options = mb_regex_set_options() ] )
 *
 * Set/Get the default options for mbregex functions.
 * http://php.net/manual/en/function.mb-regex-set-options.php
 * @param string $options the options to set. This is a string where each character is an option. To set a mode, the
 * mode character must be the last one set, however there can only be set one mode but multiple options:
 * REGEX OPTIONS:
 * i -> Ambiguity match on.
 * x -> Enables extended pattern form.
 * m -> '.' matches with newlines.
 * s -> '^' -> '\A', '$' -> '\Z'.
 * p -> Same as both the m and s options.
 * l -> Finds longest matches.
 * n -> Ignores empty matches.
 * e -> eval() resulting code.
 * REGEX SYNTAX MODES:
 * j -> Java (Sun java.util.regex).
 * u -> GNU regex.
 * g -> grep.
 * c -> Emacs.
 * r -> Ruby.
 * z -> Perl.
 * b -> POSIX Basic regex.
 * d -> POSIX Extended regex.
 * @return string The previous options. If options is omitted, it returns the string that describes the current options.
 */

var_dump(mb_regex_set_options());
var_dump(mb_regex_set_options('mslneri'));