<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 17:27
 *
 * alternative syntax for a "if" loop.
 * https://secure.php.net/manual/en/control-structures.alternative-syntax.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

$a = 5;

if ($a === 5):
    echo 'A is equal to 5';
endif;

echo PHP_EOL;

if ($a == 5):
    echo "a equals 5" . PHP_EOL;
    echo "...";
elseif ($a == 6):
    echo "a equals 6" . PHP_EOL;
    echo "!!!";
else:
    echo "a is neither 5 nor 6";
endif;

echo PHP_EOL;