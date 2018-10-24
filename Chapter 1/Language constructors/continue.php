<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 15:09
 *
 * Used within looping structures to skip the rest of the current loop iteration and continue execution at the
 * condition evaluation and then the beginning of the next iteration.
 * https://secure.php.net/manual/en/control-structures.continue.php
 * NOTE: In PHP the switch statement is considered a looping structure for the purposes of continue. continue behaves
 * like break (when no arguments are passed). If a switch is inside a loop, continue 2 will continue with the next
 * iteration of the outer loop.
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

$arr = [0, 1, 2];

foreach ($arr as $key => $value) {
    if (!($key % 2)) {
        continue;
    }

    echo $key . PHP_EOL;
}

$i = 0;

while ($i++ < 5) {
    echo "Outer<br />\n";
    while (1) {
        echo "Middle<br />\n";

        while (1) {
            echo "Inner<br />\n";
            continue 3;
        }

        echo "This never gets output.<br />\n";
    }
    echo "Neither does this.<br />\n";
}

echo PHP_EOL;

for ($i = 0; $i < 3; ++$i) {
    echo ' [', $i, '] ';
    switch ($i) {
        case 0:
            echo 'zero';
            break;
        case 1:
            echo 'one';
            break;
        case 2:
            echo 'two';
            break;
    }
    echo ' <', $i, '> ';
}

echo PHP_EOL;

for ($i = 0; $i < 3; ++$i) {
    echo ' [', $i, '] ';
    switch ($i) {
        case 0:
            echo 'zero';
            break;
        case 1:
            echo 'one';
            continue;
        case 2:
            echo 'two';
            break;
    }
    echo ' <', $i, '> ';
}