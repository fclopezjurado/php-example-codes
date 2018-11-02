<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 14:05
 */

$a = 'new string';
$b =& $a;
$arr = ['name' => 'Bob', 'age' => 23 ];

xdebug_debug_zval('a');
xdebug_debug_zval('b');
xdebug_debug_zval('arr');