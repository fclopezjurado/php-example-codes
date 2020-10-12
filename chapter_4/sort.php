<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:56
 */

$fruits = ['lemon', 'orange', 'banana', 'apple'];

sort($fruits);
var_dump($fruits);

$fruits = ['Orange1', 'orange2', 'Orange3', 'orange20'];

/**
 * SORT_FLAG_CASE: case insensitive.
 * SORT_NUMERIC: by numbers.
 * SORT_STRING: by strings.
 * SORT_LOCALE_STRING: by string using current locale configuration
 */
sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
var_dump($fruits);

$fruits = ['Orange1', 'orange2', 'Orange3', 'orange20'];

sort($fruits, SORT_NUMERIC | SORT_FLAG_CASE);
var_dump($fruits);