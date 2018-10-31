<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 24/10/18
 * Time: 17:45
 *
 * There are four ways in which an integer may be expressed in a PHP script.
 * Floats can be expressed with exponential notation.
 */

$decimal = 12345;
$binary = 0b10010111; # 151
$octal = 02322; # 1234
$hexadecimal = 0x42; # 66
$float = 123.456;
$exponential = 0.45678e23;

var_dump($decimal + $binary);
var_dump($octal + $binary);
var_dump($hexadecimal + $binary + $octal + $decimal);
var_dump($exponential);
var_dump($float);
var_dump($float * $exponential);
var_dump($exponential / $float);