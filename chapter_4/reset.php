<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:56
 */

$array = ['step one', 'step two', 'step three', 'step four'];

echo current($array) . PHP_EOL;

next($array);
next($array);

echo current($array) . PHP_EOL;

reset($array);

echo current($array) . PHP_EOL;