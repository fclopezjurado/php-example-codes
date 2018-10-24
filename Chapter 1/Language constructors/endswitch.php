<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 15/10/2018
 * Time: 17:41
 *
 * Alternative syntax for a switch.
 * https://secure.php.net/manual/en/control-structures.alternative-syntax.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

$var = 0;

switch ($var):
    case 0:
        var_dump(++$var);
        break;
    case 1:
        var_dump(--$var);
        break;
endswitch;