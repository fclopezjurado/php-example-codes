<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 02/09/20
 * Time: 9:38
 */

$value = 10;

# If you don't use "break" sentence in each case, more cases could be executed
switch ($value) {
    case 10:
        echo 'Value is 10';
    case 20:
        echo 'Value is 20';
        break;
    case 30:
        echo 'Value is 30';
        break;
    default:
        echo 'Value is not 10, 20, or 30';
        break;
}

# If you use cases after "default" sentence, these cases could be executed
$value = 30;

switch ($value) {
    case 10:
        echo 'Value is 10';
        break;
    case 20:
        echo 'Value is 20';
        break;
    default:
        echo 'Value is not 10, 20, or 30';
        break;
    case 30:
        echo 'Value is 30';
        break;
}