<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:32
 *
 * int vfprintf ( resource $handle , string $format , array $args )
 *
 * Write a formatted string to a stream.
 * http://php.net/manual/en/function.vfprintf.php
 * Write a string produced according to format to the stream resource specified by handle. Operates as fprintf() but
 * accepts an array of arguments, rather than a variable number of arguments.
 * @param resource $handle
 * @param string $format see sprintf() for a description of format.
 * @param array $args
 * @return int the length of the outputted string.
 */

if (!($fp = fopen('../../output.txt', 'w')))
    return;

// will write the formatted ISO date to date.txt
var_dump(vfprintf($fp, "%04d-%02d-%02d", array(2018, 12, 11)));