<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 15:46
 *
 * Gets the number of arguments passed to the function.
 * http://php.net/manual/en/function.func-num-args.php
 * Generates a warning if called from outside of a user-defined function.
 */

function foo()
{
    $num_args = func_num_args();
    var_dump('Number of arguments: ' . $num_args);
}

foo(1, 2, 3);
var_dump(func_num_args());