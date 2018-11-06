<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 15:47
 *
 * Returns an array in which each element is a copy of the corresponding member of the current user-defined function's
 * argument list.
 * http://php.net/manual/en/function.func-get-args.php
 * Generates a warning if called from outside of a user-defined function.
 */

function foo()
{
    $arg_list = func_get_args();
    $num_args = func_num_args();
    var_dump('Number of arguments: ' . $num_args);

    if ($num_args >= 2) {
        var_dump('Second argument is: ' . func_get_arg(1));
    }

    for ($i = 0; $i < $num_args; $i++) {
        var_dump('Argument ' . $i . ' is: ' . $arg_list[$i]);
    }
}

/**
 * If you change the value of an argument in a function, then the value returned by func_get_arg() will be the new
 * value.
 * @param string $data
 */
function myFunc($data)
{
    $data = 'Changed';
    var_dump(func_get_arg(0));
}

foo(1, 2, 3);
var_dump(func_get_args());
myFunc('test');