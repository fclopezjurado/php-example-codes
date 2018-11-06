<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 6/11/18
 * Time: 17:49
 *
 * Convenient way to declare a string that spans multiple lines.
 * http://php.net/manual/es/language.types.string.php#language.types.string.syntax.heredoc
 * Heredoc text behaves just like a double-quoted string, without the double quotes.
 */

$str = <<<HEREDOC
Example of string
spanning multiple lines
using heredoc syntax.
HEREDOC;

class foo1
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo1();
$name = 'myName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;

echo PHP_EOL;

/**
 * Heredoc in arguments example.
 */
var_dump(array(<<<EOD
foobar!
EOD
));

/**
 * Using Heredoc to initialize static values and class properties.
 */
function foo()
{
    static $bar = <<<LABEL
Nothing in here...
LABEL;
}

class foo2
{
    const BAR = <<<FOOBAR
Constant example
FOOBAR;

    public $baz = <<<FOOBAR
Property example
FOOBAR;
}

/**
 * Using double quotes in Heredoc.
 */
echo <<<"FOOBAR"
Hello World!
FOOBAR;

echo PHP_EOL;