<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:46
 *
 * mixed mb_http_input ([ string $type = "" ] )
 *
 * Detect HTTP input character encoding.
 * http://php.net/manual/en/function.mb-http-input.php
 * @param string $type input string specifies the input type. "G" for GET, "P" for POST, "C" for COOKIE,
 * "S" for string, "L" for list, and "I" for the whole list (will return array). If type is omitted, it returns the
 * last input type processed.
 * @return mixed the character encoding name, as per the type. If mb_http_input() does not process specified HTTP
 * input, it returns FALSE.
 */

var_dump(mb_http_input('G'));
var_dump(mb_http_input('P'));
var_dump(mb_http_input('C'));
var_dump(mb_http_input('S'));
var_dump(mb_http_input('L'));
var_dump(mb_http_input('I'));
var_dump(mb_http_input());