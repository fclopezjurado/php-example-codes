<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:51
 *
 * current ( array $array ) : mixed
 *
 * Every array has an internal pointer to its "current" element, which is initialized to the first element inserted
 * into the array.
 * http://php.net/manual/en/function.current.php
 * @param array $array the array.
 * @return mixed the current() function simply returns the value of the array element that's currently being pointed to
 * by the internal pointer. It does not move the pointer in any way. If the internal pointer points beyond the end of
 * the elements list or the array is empty, current() returns FALSE.
 */

$transport = ['foot', 'bike', 'car', 'plane'];
var_dump(current($transport));
var_dump(next($transport));
var_dump(current($transport));
var_dump(prev($transport));
var_dump(end($transport));
var_dump(current($transport));

$arr = [];
var_dump(current($arr));
$arr = [[]];
var_dump(current($arr));