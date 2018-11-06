<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 16:18
 *
 * If PHP encounters a variable name that has parentheses appended to it then it evaluates the variable.
 */

function foo()
{
    var_dump('Foo');
}

$var = 'foo';
$var();
