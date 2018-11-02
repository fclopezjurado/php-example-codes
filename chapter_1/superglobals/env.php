<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 12:45
 *
 * An associative array of variables passed to the current script via the environment method.
 * These variables are imported into PHPs global namespace from the environment under which the PHP parser is running.
 * Many are provided by the shell under which PHP is running and different systems are likely running different kinds
 * of shells, a definitive list is impossible. Please see your shell's documentation for a list of defined environment
 * variables.
 * http://php.net/manual/en/reserved.variables.environment.php
 */

var_dump($_ENV);