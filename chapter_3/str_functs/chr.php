<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:12
 *
 * Generate a single-byte string from an integer.
 * http://php.net/manual/en/function.chr.php
 * @param int bytevalue an integer between 0 and 255. Values outside the valid range (0..255) will be bitwise and'ed
 * with 255.
 */

$str = 'The string ends in escape: ';

/**
 * Add an escape character at the end of $str
 */
$str .= chr(27);

/**
 * Often this is more useful
 */
$str = sprintf("The string ends in escape: %c", 27);

/**
 * Overflow behaviour.
 */
var_dump(chr(-159) . chr(833));

/**
 * Building a UTF-8 string from individual bytes
 */
$str = chr(240) . chr(159) . chr(144) . chr(152);
var_dump($str);