<?php

/**
 * Created by PhpStorm.
 * User: fran lopez
 * Date: 12/09/18
 * Time: 17:53
 *
 * void echo ( string $arg1 [, string $... ] )
 *
 * http://php.net/manual/en/function.echo.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

echo "Hello World";

/** Two parameters, brackets (syntax error) */
//echo('hello', 'world');

echo "This spans
multiple lines. The newlines will be
output as well";

echo "This spans\nmultiple lines. The newlines will be\noutput as well.";

echo "Escaping characters is done \"Like this\".";

// You can use variables inside of an echo statement
$foo = "foobar";
$bar = "barbaz";

echo "foo is $foo"; // foo is foobar

// You can also use arrays
$baz = array("value" => "foo");

echo "this is {$baz['value']} !"; // this is foo !

// Using single quotes will print the variable name, not the value
echo 'foo is $foo'; // foo is $foo

// If you are not using any other characters, you can just echo variables
echo $foo;          // foobar
echo $foo,$bar;     // foobarbarbaz

// Strings can either be passed individually as multiple arguments or
// concatenated together and passed as a single argument
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', chr(10);
echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n";

/**
 * Generates a PHP notice.
 */
echo <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
END;

/**
 * Because echo does not behave like a function, the following code is invalid (syntax error).
 */
//($some_var)? echo 'true' : echo 'false';

//
/**
 * However, the following examples will work:
 * print is also a construct, but it behaves like a function, so it may be used in this context.
 */
($some_var) ? print 'true' : print 'false';

/**
 * changing the statement around.
 */
echo $some_var ? 'true': 'false';
?>
