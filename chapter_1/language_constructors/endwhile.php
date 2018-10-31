<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 22/10/18
 * Time: 19:25
 *
 * Alternative syntax for a while loop.
 * https://secure.php.net/manual/en/control-structures.alternative-syntax.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

$i = 1;

while ($i <= 10):
    echo $i;
    $i++;
endwhile;

echo PHP_EOL;