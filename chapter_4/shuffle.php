<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:56
 */

/**
 * Mix elements without preserving keys.
 */
$numbers = range(1, 20);

shuffle($numbers);
var_dump($numbers);