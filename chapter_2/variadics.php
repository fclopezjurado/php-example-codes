<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 5/11/18
 * Time: 16:04
 *
 * Variadic parameters.
 * https://secure.php.net/manual/en/functions.arguments.php#functions.variable-arg-list
 * The variadic parameters are made available in your function as an array.
 * If you are mixing normal fixed parameters with a variadic syntax, then the variadic parameter must be the last
 * parameter in the list of parameters.
 *
 */

/**
 * @param $required
 * @param null $optional
 * @param mixed ...$variadicParams
 */
function parameterTypeExample($required, $optional = null, ...$variadicParams) {
    printf('Required: %d; Optional: %d; number of variadic parameters: %d'. PHP_EOL, $required, $optional,
        count($variadicParams));
}

parameterTypeExample(1);
parameterTypeExample(1, 2);
parameterTypeExample(1, 2, 3);
parameterTypeExample(1, 2, 3, 4);
parameterTypeExample(1, 2, 3, 4, 5);