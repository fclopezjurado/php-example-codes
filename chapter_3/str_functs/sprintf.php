<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:23
 *
 * string sprintf ( string $format [, mixed $... ] )
 *
 * Returns a string produced according to the formatting string format.
 * http://php.net/manual/en/function.sprintf.php
 * @param string $format see documentation in notes to study different string formats for this function.
 * @param ... $args variadic parameters. Number of them depends on string format used.
 * @return string|bool produced according to the formatting string format, or false on failure.
 */

$num = 5;
$location = 'tree';
$format = 'There are %d monkeys in the %s';
var_dump(sprintf($format, $num, $location));
$format = 'The %s contains %d monkeys';
var_dump(sprintf($format, $num, $location));
$format = 'The %2$s contains %1$d monkeys';
var_dump(sprintf($format, $num, $location));
$format = 'The %2$s contains %1$d monkeys.
           That\'s a nice %2$s full of %1$d monkeys.';
var_dump(sprintf($format, $num, $location));
var_dump(sprintf("%'.9d\n", 123));
var_dump(sprintf("%'.09d\n", 123));
$format = 'The %2$s contains %1$04d monkeys';
var_dump(sprintf($format, $num, $location));
var_dump(sprintf("%04d-%02d-%02d", 2019, 07, 10));

$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
$number = 362525200;

var_dump(sprintf("%01.2f", $money)); // echo $money will output "123.1";
var_dump(sprintf("%.3e", $number)); // outputs 3.625e+8
