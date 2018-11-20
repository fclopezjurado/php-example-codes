<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:20
 *
 * Calculate the md5 hash of a string.
 * http://php.net/manual/en/function.md5.php
 * @param string $str the string.
 * @param bool $raw_output if the optional raw_output is set to true, then the md5 digest is instead returned in raw
 * binary format with a length of 16.
 * @return string the hash as a 32-character hexadecimal number.
 */

var_dump(md5('apple'));
var_dump(md5('apple', true));