<?php

/**
 * Created by PhpStorm.
 * User: franlopez
 * Date: 13/09/18
 * Time: 16:13
 *
 * PRINT. http://be2.php.net/manual/en/function.print.php
 * Language constructor.
 */

print("Hello World");

print "print() also works without parentheses.";

print "This spans
multiple lines. The newlines will be
output as well";

print "This spans" . PHP_EOL . "multiple lines. The newlines will be" . PHP_EOL . "output as well.";

print "escaping characters is done \"Like this\".";

/**
 * You can use variables inside a print statement
 */
$foo = "foobar";
$bar = "barbaz";

/**
 * foo is foobar
 */
print "foo is $foo";

/**
 * You can also use arrays
 */
$bar = array("value" => "foo");

/**
 * this is foo !
 */
print "this is {$bar['value']} !";

/**
 * Using single quotes will print the variable name, not the value
 */
print 'foo is $foo';

/**
 * If you are not using any other characters, you can just print variables
 */
print $foo;

print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END

?>