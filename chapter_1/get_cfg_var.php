<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 13:59
 *
 * Gets the value of a PHP configuration option.
 * This function will not return configuration information set when the PHP was compiled, or read from an Apache
 * configuration file.
 * http://php.net/manual/en/function.get-cfg-var.php
 * Returns the current value of the PHP configuration variable specified by option, or FALSE if an error occurs.
 */

var_dump(get_cfg_var('error_reporting'));