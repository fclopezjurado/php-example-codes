<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:19
 *
 * Make a string's first character lowercase.
 * http://php.net/manual/en/function.lcfirst.php
 * Note that 'alphabetic' is determined by the current locale. For instance, in the default "C" locale characters such
 * as umlaut-a (ä) will not be converted.
 * @param string $str the input string.
 * @return string the resulting string.
 */

var_dump(lcfirst('HelloWorld'));
var_dump(lcfirst('HELLO WORLD!'));
var_dump(lcfirst(strtoupper('HelloWorld')));
var_dump(lcfirst(54634));
var_dump(lcfirst(true));