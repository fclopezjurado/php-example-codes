<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 15:53
 *
 * Evaluates the given code as PHP.
 * https://secure.php.net/manual/en/function.eval.php
 * Is very dangerous because it allows execution of arbitrary PHP code. Its use thus is discouraged. If you have
 * carefully verified that there is no other option than to use this construct, pay special attention not to pass any
 * user provided data into it without properly validating it beforehand.
 *
 * eval() returns NULL unless return is called in the evaluated code, in which case the value passed to return is
 * returned. As of PHP 7, if there is a parse error in the evaluated code, eval() throws a ParseError exception.
 * Before PHP 7, in this case eval() returned FALSE and execution of the following code continued normally. It is not
 * possible to catch a parse error in eval() using set_error_handler().
 * Language constructor.
 */

$string = 'cup';
$name = 'coffee';
$str = 'This is a $string with my $name in it.';

echo $str. "\n";
var_dump(eval("\$str = \"$str\";"));
echo $str. "\n";