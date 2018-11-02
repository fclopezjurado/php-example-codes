<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 10:01
 *
 * The number of arguments passed to script. Returns an integer.
 * Contains the number of arguments passed to the current script when running from the command line.
 * http://php.net/manual/en/reserved.variables.argc.php
 * NOTE: The script's filename is always passed as an argument to the script, therefore the minimum value of $argc is 1.
 * NOTE: This variable is not available when register_argc_argv is disabled.
 */

var_dump($argc);