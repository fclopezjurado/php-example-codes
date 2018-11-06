<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 15:21
 *
 * Alternate null type syntax.
 * Hint variables that may be null. You can prefix the type hint with a question mark to indicate that the variable
 * may either be null or of the specified type.
 */

/**
 * @param null|string $parameter
 */
function myFunc(?string $parameter)
{
    var_dump($parameter);
}

$parameter = null;
myFunc($parameter);
$parameter = 'test';
myFunc($parameter);

/**
 * Fatal error. To few arguments
 */
myFunc();
