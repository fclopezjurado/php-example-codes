<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:55
 */

foreach (range(0, 12) as $number) {
    echo $number;
}

echo PHP_EOL;

foreach (range(0, 100, 10) as $number) {
    echo $number;
}

echo PHP_EOL;

foreach (range('a', 'i') as $letter) {
    echo $letter;
}

echo PHP_EOL;

foreach (range('c', 'a') as $letter) {
    echo $letter;
}

echo PHP_EOL;