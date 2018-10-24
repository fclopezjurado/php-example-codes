<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 18/10/2018
 * Time: 17:40
 *
 * Code may be surrounded in a try block, to facilitate the catching of potential exceptions.
 * Each try must have at least one corresponding catch or finally block.
 * The thrown object must be an instance of the Exception class or a subclass of Exception. Trying to throw an object
 * that is not will result in a PHP Fatal Error.
 * https://secure.php.net/manual/en/language.exceptions.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

/**
 * @param $x
 * @return float|int
 * @throws Exception
 */
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "First finally.\n";
}

try {
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "Second finally.\n";
}

echo "Hello World\n";