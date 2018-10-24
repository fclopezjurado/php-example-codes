<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 16:41
 *
 * Set execution directives for a block of code.
 * https://secure.php.net/manual/en/control-structures.declare.php
 * Language constructor.
 */

declare(ticks = 1);

function handler(){
    print 'hello' . PHP_EOL;
}

register_tick_function("handler");

declare(ticks = 1) {
    $b = 2;
}