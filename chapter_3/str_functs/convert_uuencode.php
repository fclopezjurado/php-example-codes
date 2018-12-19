<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:13
 *
 * string convert_uuencode ( string $data )
 *
 * Encodes a string using the uuencode algorithm.
 * Uuencode translates all strings (including binary data) into printable characters, making them safe for network
 * transmissions. Uuencoded data is about 35% larger than the original.
 * This function neither produces the begin nor the end line, which are part of uuencoded files.
 * http://php.net/manual/en/function.convert-uuencode.php
 * @param string $data the data to be encoded.
 * @return string the uuencoded data or false on failure.
 */

$some_string = 'test' . PHP_EOL . "text text\r" . PHP_EOL;
var_dump(convert_uuencode($some_string));