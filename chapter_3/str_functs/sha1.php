<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:23
 *
 * string sha1 ( string $str [, bool $raw_output = FALSE ] )
 *
 * Calculate the sha1 hash of a string.
 * WARNING: It is not recommended to use this function to secure passwords, due to the fast nature of this hashing
 * algorithm. See the Password Hashing FAQ for details and best practices.
 * http://php.net/manual/en/function.sha1.php
 * @param string $str the input string
 * @param bool $raw_output if the optional raw_output is set to TRUE, then the sha1 digest is instead returned in raw
 * binary format with a length of 20, otherwise the returned value is a 40-character hexadecimal number.
 * @return string the sha1 hash as a string. Returned string length is 40 characters.
 */

var_dump(sha1('apple'));
var_dump(sha1('an incredible phrase'));
var_dump(sha1('an incredible phrase', true));