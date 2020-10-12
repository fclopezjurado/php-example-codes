<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 6/11/18
 * Time: 18:02
 *
 * Nowdocs are to single-quoted strings what heredocs are to double-quoted strings. A nowdoc is specified similarly to
 * a heredoc, but no parsing is done inside a nowdoc. The construct is ideal for embedding PHP code or other large
 * blocks of text without the need for escaping.
 * http://php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc
 */

echo <<<NOWDOC
This is a nowdoc string, note:
1) Single quotes around the label
2) Variables will not be evaluated
3) Control characters will not be evaluated
NOWDOC;

# You could write the string block type in single quotes.
echo <<<'NOWDOC'
This is a nowdoc string, note:
1) Single quotes around the label
2) Variables will not be evaluated
3) Control characters will not be evaluated
NOWDOC;

$str = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax.
EOD;

/* More complex example, with variables. */

class foo
{
    public $foo;
    public $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<'EOT'
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should not print a capital 'A': \x41
EOT;
