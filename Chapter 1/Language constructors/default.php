<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 17:22
 *
 * A special case is the default case. This case matches anything that wasn't matched by the other cases.
 * https://secure.php.net/manual/en/control-structures.switch.php
 * Language constructor.
 */

$i = 0;

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
}

echo PHP_EOL;

switch ($i):
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
endswitch;

echo PHP_EOL;
$beer = 'guinness';

switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Good choice';
        break;
    default;
        echo 'Please make a new selection...';
        break;
}

echo PHP_EOL;