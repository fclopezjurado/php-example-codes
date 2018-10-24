<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 12:58
 *
 * Unset a given set of variables. If a globalized variable is unset() inside of a function, only the local variable
 * is destroyed. The variable in the calling environment will retain the same value as before unset() was called.
 * https://secure.php.net/manual/en/function.unset.php
 * Language constructor.
 */

// destroy a single variable
unset($foo);

// destroy a single element of an array
unset($bar['quux']);

// destroy more than one variable
unset($foo1, $foo2, $foo3);

function destroy_foo()
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;

function foo()
{
    unset($GLOBALS['bar']);
}

$bar = "something";
foo();

function foo2(&$bar)
{
    unset($bar);
    $bar = "blah";
}

$bar = 'something';
echo "$bar\n";

foo2($bar);
echo "$bar\n";

function foo3()
{
    static $bar;
    $bar++;
    echo "Before unset: $bar, ";
    unset($bar);
    $bar = 23;
    echo "after unset: $bar\n";
}

foo3();
foo3();
foo3();