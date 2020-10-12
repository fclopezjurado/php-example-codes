<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:58
 */

/**
 * @param int $prevValue
 * @param int $nextValue
 * @return int
 */
function compare($prevValue, $nextValue)
{
    return $prevValue <=> $nextValue;
}

$array = [3, 2, 5, 6, 1];

usort($array, 'compare');
var_dump($array);