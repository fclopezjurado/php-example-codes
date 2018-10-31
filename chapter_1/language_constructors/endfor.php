<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 15:46
 *
 * Alternative syntax for a "for" loop.
 * https://secure.php.net/manual/en/control-structures.alternative-syntax.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

for ($i = 1; $i <= 10; $i++):
    echo $i;
endfor;

echo PHP_EOL;

for ($i = 1; ; $i++):
    if ($i > 10) {
        break;
    }
    echo $i;
endfor;

echo PHP_EOL;
$i = 1;

for (; ;):
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
endfor;

echo PHP_EOL;

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++) ;

echo PHP_EOL;