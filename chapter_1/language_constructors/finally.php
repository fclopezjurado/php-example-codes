<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 22/10/18
 * Time: 19:29
 *
 * Code within the finally block will always be executed after the try and catch blocks, regardless of whether an
 * exception has been thrown, and before normal execution resumes.
 * http://php.net/manual/en/language.exceptions.php
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

// Continue execution
echo "Hello World\n";