<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 15:59
 *
 * "for" loops are the most complex loops in PHP. They behave like their C counterparts.
 * https://secure.php.net/manual/en/control-structures.for.php
 * Language constructor.
 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

echo PHP_EOL;

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

echo PHP_EOL;
$i = 1;

for (; ;) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

echo PHP_EOL;
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
echo PHP_EOL;
