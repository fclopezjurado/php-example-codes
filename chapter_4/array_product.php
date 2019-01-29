<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:44
 *
 * array_product ( array $array ) : number
 *
 * Returns the product of values in an array.
 * http://php.net/manual/en/function.array-product.php
 * @param array $array the array.
 * @param int|float the product as an integer or float.
 */

$a = [2, 4, 6, 8];
var_dump(array_product($a));
var_dump(array_product([]));
var_dump(array_product(['element1', 'element2', 'element3']));