<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 17:24
 *
 * Combination of if and else. Like else, it extends an if statement to execute a different statement in case the
 * original if expression evaluates to FALSE.
 * https://secure.php.net/manual/en/control-structures.elseif.php
 * Language constructor.
 */

$a = 0;
$b = 1;

if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}

echo PHP_EOL;

if ($a > $b):
    echo $a." is greater than ".$b;
elseif ($a == $b): // Note the combination of the words.
    echo $a." equals ".$b;
else:
    echo $a." is neither greater than or equal to ".$b;
endif;

echo PHP_EOL;


/**
 * Incorrect Method: Will not compile.
 */
/*if ($a > $b):
    echo $a." is greater than ".$b;
else if ($a == $b): //
    echo "The above line causes a parse error.";
endif;*/