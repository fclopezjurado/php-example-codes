<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:48
 *
 * Parse GET/POST/COOKIE data and set global variable.
 * http://php.net/manual/en/function.mb-parse-str.php
 * Parses GET/POST/COOKIE data and sets global variables. Since PHP does not provide raw POST/COOKIE data, it can only
 * be used for GET data for now. It parses URL encoded data, detects encoding, converts coding to internal encoding
 * and set values to the result array or global variables.
 * @param string $encoded_string the URL encoded data.
 * @param array $result an array containing decoded and character encoded converted values.
 * @return bool TRUE on success or FALSE on failure.
 */

var_dump(mb_parse_str('email=kehaovista@qq.com&city=shanghai&job=Phper', $result));
var_dump($result);
