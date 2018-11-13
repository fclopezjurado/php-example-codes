<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:17
 *
 * Write a string produced according to format to the stream resource specified by handle.
 * http://php.net/manual/en/function.fprintf.php
 * @param resource $handle a file system pointer resource that is typically created using "fopen()".
 * @param string $format see sprintf() for a description of format.
 * @param mixed args... variadic arguments.
 * @return int length of the string written.
 */

/**
 * Example 1: Zero-padded integers
 */
if (!($fp = fopen('date.txt', 'w'))) {
    return;
}

/**
 * Will write the formatted ISO date to date.txt
 */
var_dump(fprintf($fp, "%04d-%02d-%02d", 2018, 11, 13));

/**
 * Example 2: Formatting currency
 */
if (!($fp = fopen('currency.txt', 'w'))) {
    return;
}

$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
$len = fprintf($fp, '%01.2f', $money);
var_dump("wrote $len bytes to currency.txt");