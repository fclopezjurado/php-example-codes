<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 15:47
 *
 * Gets the specified argument from a user-defined function's argument list.
 * http://php.net/manual/en/function.func-get-arg.php
 * @param int arg_num The argument offset. Function arguments are counted starting from zero.
 * Generates a warning if called from outside of a user-defined function, or if arg_num is greater than the number of
 * arguments actually passed.
 */

function foo()
{
    $num_args = func_num_args();
    var_dump('Number of arguments: ' . $num_args);

    if ($num_args >= 2) {
        var_dump('Second argument is: ' . func_get_arg(1));
    }

    var_dump(func_get_arg(5));
}

foo(1, 2, 3);
var_dump(func_get_arg(1));