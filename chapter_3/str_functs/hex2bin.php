<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:17
 *
 * Decodes a hexadecimally encoded binary string. This function does NOT convert a hexadecimal number to a binary
 * number. This can be done using the base_convert() function.
 * http://php.net/manual/en/function.hex2bin.php
 * @param string $data hexadecimal representation of data.
 * @return string the binary representation of the given data or false on failure.
 * @throw if the hexadecimal input string is of odd length or invalid hexadecimal string an E_WARNING level error is
 * thrown.
 */

var_dump(hex2bin('6578616d706c65206865782064617461'));
var_dump(hex2bin("48656c6c6f20576f726c6421"));
var_dump(hex2bin("48656c6c6fyyy20576f726c6421"));