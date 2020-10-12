<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:57
 */

/**
 * @param int $a
 * @param int $b
 * @return int
 */
function compare(int $a, int $b) {
    return $a <=> $b;
}

$array = ['a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4];

print_r($array);
uasort($array, 'compare');
print_r($array);