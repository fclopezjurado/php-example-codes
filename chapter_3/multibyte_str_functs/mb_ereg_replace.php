<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:42
 *
 * Replace regular expression with multi byte support.
 * http://php.net/manual/en/function.mb-ereg-replace.php
 * Scans string for matches to pattern, then replaces the matched text with replacement.
 * @param string $pattern the regular expression pattern. Multibyte characters may be used in pattern.
 * @param string $replacement the replacement text.
 * @param string $string the string being checked.
 * @param string $option the search option. See mb_regex_set_options() for explanation.
 * @return string|bool the resultant string on success, or FALSE on error.
 */

var_dump(mb_ereg_replace("([あ-ん]+)[0-9]+", '「\\1」:\\0', 'あんあんあんあん45464'));