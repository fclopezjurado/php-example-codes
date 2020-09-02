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

/**
 * Checks if $a and $b variable zval containers are pointing to the same reference.
 * In this case, zval containers of $a and b variables are pointing to the same reference
 */
xdebug_debug_zval('a');
xdebug_debug_zval('b');

$b = 'changed string';

/**
 * The output of this script is as follows:
 * a: (refcount=2, is_ref=0)='new string')
 * b: (refcount=2, is_ref=0)='new string')
 * a: (refcount=1, is_ref=0)='changed string')
 * b: (refcount=1, is_ref=0)='changed string')
 */

/**
 * Before second assignment of $b variable, two zval containers are pointing to the same reference.
 * After this assignment, two zval container are pointing to different zval containers.
 */

xdebug_debug_zval('arr');

/**
 * The output from this script looks like this:
 * arr: (refcount=1, is_ref=0)=array (
 *      'name' => (refcount=1, is_ref=0)='Bob',
 *      'age' => (refcount=1, is_ref=0)=23)
 */

/**
 * In this case zval container is pointing to a single memory reference.
 * The rest of array elements are doing the same
 */