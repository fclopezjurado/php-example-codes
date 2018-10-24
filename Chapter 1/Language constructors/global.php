<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 16/10/2018
 * Time: 17:12
 *
 * Uses of "global" language constructor. Is used when a variable or class needs to be in global context.
 * https://secure.php.net/manual/en/language.oop5.final.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

$a = 1;
$b = 2;

function Sum1()
{
    global $a, $b;
    $b = $a + $b;
}

Sum1();
echo $b . PHP_EOL;

function Sum2()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum2();
echo $b . PHP_EOL;