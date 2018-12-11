<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:32
 *
 * Output a formatted string.
 * http://php.net/manual/en/function.vprintf.php
 * Display array values as a formatted string according to format (which is described in the documentation for
 * sprintf()). Operates as printf() but accepts an array of arguments, rather than a variable number of arguments.
 * @param string $format see sprintf() for a description of format.
 * @param array $args
 * @return int the length of the outputted string.
 */

$length = vprintf("%04d-%02d-%02d", explode('-', '1988-8-1'));
echo PHP_EOL;
var_dump($length); // 1988-08-01