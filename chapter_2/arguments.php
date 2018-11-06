<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 15:01
 *
 * Function arguments. When they're typed, if data type of a parameter is different than defined in function, script
 * returns a fatal error (type error).
 */

/**
 * Test strict mode trying to use a primary data type (coercive mode by default).
 * Strict mode avoid uses of a primary data type (int, bool, string, etc) in parameters with another primary data type.
 */
declare(strict_types=1);

/**
 * @param stdClass $parameter
 */
function test1 (stdClass $parameter) {
    var_dump($parameter->attribute);
}

/**
 * @param string $parameter
 */
function test2 (string $parameter)
{
    var_dump($parameter);
}

/**
 * Test uncaught fatal error.
 */
$test = new stdClass();
$test->attribute = 'test';
test1($test);
test1($test->attribute);
//test2(false);
