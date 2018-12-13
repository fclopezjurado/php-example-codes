<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:51
 *
 * Return width of string.
 * http://php.net/manual/en/function.mb-strwidth.php
 * The fullwidth characters are: U+1100-U+115F, U+11A3-U+11A7, U+11FA-U+11FF, U+2329-U+232A, U+2E80-U+2E99,
 * U+2E9B-U+2EF3, U+2F00-U+2FD5, U+2FF0-U+2FFB, U+3000-U+303E, U+3041-U+3096, U+3099-U+30FF, U+3105-U+312D,
 * U+3131-U+318E, U+3190-U+31BA, U+31C0-U+31E3, U+31F0-U+321E, U+3220-U+3247, U+3250-U+32FE, U+3300-U+4DBF,
 * U+4E00-U+A48C, U+A490-U+A4C6, U+A960-U+A97C, U+AC00-U+D7A3, U+D7B0-U+D7C6, U+D7CB-U+D7FB, U+F900-U+FAFF,
 * U+FE10-U+FE19, U+FE30-U+FE52, U+FE54-U+FE66, U+FE68-U+FE6B, U+FF01-U+FF60, U+FFE0-U+FFE6, U+1B000-U+1B001,
 * U+1F200-U+1F202, U+1F210-U+1F23A, U+1F240-U+1F248, U+1F250-U+1F251, U+20000-U+2FFFD, U+30000-U+3FFFD.
 * All other characters are halfwidth characters.
 * @param string $str the string being decoded.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return int the width of string str.
 */

var_dump(mb_strwidth('Mary Had A Little Lamb and She LOVED It So'));
var_dump(mb_strwidth('Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός', 'UTF-8'));