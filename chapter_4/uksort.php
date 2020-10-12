<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:58
 */

/**
 * @param string $prevKey
 * @param string $nextKey
 * @return int
 */
function compare(string $prevKey, string $nextKey)
{
    $prevKey = preg_replace('@^(a|an|the) @', '', $prevKey);
    $nextKey = preg_replace('@^(a|an|the) @', '', $nextKey);

    return strcasecmp($prevKey, $nextKey);
}

$array = ['John' => 1, 'the Earth' => 2, 'an apple' => 3, 'a banana' => 4];

uksort($array, 'compare');
var_dump($array);