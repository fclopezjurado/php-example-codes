<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 16:12
 *
 * Pass variables by reference.
 * It is possible to pass them by reference. You can do this by declaring the argument as a pass by reference.
 */

/**
 * @param int $arg
 */
function addOne(&$arg)
{
    $arg++;
}

$a = 0;
addOne($a);
var_dump($a);

/**
 * Fatal error as of PHP 5.4.0. In last versions, only & is possible to use when a function parameter is defined.
 */
//addOne(&$a);