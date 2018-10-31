<?php

/**
 * Created by PhpStorm.
 * User: franlopez
 * Date: 11/09/18
 * Time: 11:57
 */

$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var" . PHP_EOL;

/**
 * These two examples replace all of $var with 'bob'.
 */
echo substr_replace($var, 'bob', 0) . PHP_EOL;
echo substr_replace($var, 'bob', 0, strlen($var)) . PHP_EOL;

/**
 * Insert 'bob' right at the beginning of $var.
 */
echo substr_replace($var, 'bob', 0, 0) . PHP_EOL;

/**
 * These next two replace 'MNRPQR' in $var with 'bob'.
 */
echo substr_replace($var, 'bob', 10, -1) . PHP_EOL;
echo substr_replace($var, 'bob', -7, -1) . PHP_EOL;

/**
 * Delete 'MNRPQR' from $var.
 */
echo substr_replace($var, '', 10, -1) . PHP_EOL;