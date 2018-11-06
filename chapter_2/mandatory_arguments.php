<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 15:42
 *
 * Mandatory arguments.
 * This code throws an ArgumentCountError (fatal error) if you do not supply all the mandatory parameters to a
 * function. You can only omit passing parameters that are optional.
 */

/**
 * @param string $message
 */
function sayHi($message) {
    echo 'Hello ' . $message . PHP_EOL;
}

sayHi();
