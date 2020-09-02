<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:52
 *
 * end ( array &$array ) : mixed
 *
 * Advances array's internal pointer to the last element, and returns its value.
 * http://php.net/manual/en/function.end.php
 * @param array the array. This array is passed by reference because it is modified by the function. This means you
 * must pass it a real variable and not a function returning an array because only actual variables may be passed by
 * reference.
 * @return mixed the value of the last element or FALSE for empty array.
 */

$fruits = ['apple', 'banana', 'cranberry'];
var_dump(end($fruits));
$fruits = [];
var_dump(end($fruits));