<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:39
 *
 * Perform case folding on a string.
 * http://php.net/manual/en/function.mb-convert-case.php
 * Performs case folding on a string, converted in the way specified by mode.
 * @param string $str the string being converted.
 * @param int $mode the mode of the conversion. It can be one of MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE,
 * MB_CASE_FOLD, MB_CASE_LOWER_SIMPLE, MB_CASE_UPPER_SIMPLE, MB_CASE_TITLE_SIMPLE, MB_CASE_FOLD_SIMPLE.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return string a case folded version of string converted in the way specified by mode.
 */

var_dump(mb_convert_case('mary had a Little lamb and she loved it so', MB_CASE_UPPER, 'UTF-8'));
var_dump(mb_convert_case('mary had a Little lamb and she loved it so', MB_CASE_LOWER, 'UTF-8'));
var_dump(mb_convert_case('mary had a Little lamb and she loved it so', MB_CASE_TITLE, 'UTF-8'));
var_dump(mb_convert_case('Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός', MB_CASE_UPPER,
    'UTF-8'));
var_dump(mb_convert_case('Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός', MB_CASE_LOWER,
    'UTF-8'));
var_dump(mb_convert_case('Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός', MB_CASE_TITLE,
    'UTF-8'));