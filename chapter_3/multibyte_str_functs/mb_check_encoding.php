<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:38
 *
 * Check if the string is valid for the specified encoding.
 * http://php.net/manual/en/function.mb-check-encoding.php
 * http://micmap.org/php-by-example/es/function/mb_check_encoding
 * Checks if the specified byte stream is valid for the specified encoding. It is useful to prevent so-called
 * "Invalid Encoding Attack".
 * @param string $var the byte stream to check. If it is omitted, this function checks all the input from the
 * beginning of the request.
 * @param string $encoding the expected encoding.
 * @return bool TRUE on success or FALSE on failure.
 */

var_dump(mb_check_encoding("\x00\x81", 'Shift_JIS'));
var_dump(mb_check_encoding("\x00\xE3", 'UTF-8'));
var_dump(mb_check_encoding('Hello world','ASCII'));
var_dump(mb_check_encoding('está','ASCII'));
var_dump(mb_check_encoding("\\xe0 is a grave",'ISO-8859-1'));