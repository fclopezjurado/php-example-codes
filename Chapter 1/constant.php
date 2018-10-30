<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 30/10/18
 * Time: 11:39
 *
 * Returns the value of a constant.
 * https://secure.php.net/manual/en/function.constant.php
 *
 */

/**
 * It's possible definition of a constant out of a namespace and a class and we use "constant"
 * function to print constant value.
 */
const MY_CONSTANT = 'test';
var_dump(constant('MY_CONSTANT'));

/**
 * PHP warning if constant used as parameter does not exist.
 */
var_dump(constant('CONSTANT'));