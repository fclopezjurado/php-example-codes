<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:49
 *
 * array_values ( array $array ) : array
 *
 * Returns all the values from the array and indexes the array numerically.
 * http://php.net/manual/en/function.array-values.php
 * @param array $array the array.
 * @return array an indexed array of values.
 */

$array = ['size' => 'XL', 'color' => 'gold'];
var_dump(array_values($array));