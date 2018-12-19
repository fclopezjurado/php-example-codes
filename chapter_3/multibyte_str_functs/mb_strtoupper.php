<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:51
 *
 * string mb_strtoupper ( string $str [, string $encoding = mb_internal_encoding() ] )
 *
 * Make a string uppercase.
 * http://php.net/manual/en/function.mb-strtoupper.php
 * @param string $str the string being uppercased.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 */

var_dump(mb_strtoupper('Mary Had A Little Lamb and She LOVED It So'));
var_dump(mb_strtoupper('Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός', 'UTF-8'));