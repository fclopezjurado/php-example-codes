<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:51
 *
 * string mb_strtolower ( string $str [, string $encoding = mb_internal_encoding() ] )
 *
 * Make a string lowercase.
 * http://php.net/manual/en/function.mb-strtolower.php
 * @param string $str the string being lowercased.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return string with all alphabetic characters converted to lowercase.
 */

var_dump(mb_strtolower('Mary Had A Little Lamb and She LOVED It So'));
var_dump(mb_strtolower('Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός', 'UTF-8'));