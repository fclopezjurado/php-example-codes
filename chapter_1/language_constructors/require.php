<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 17:13
 *
 * Is identical to include, but include throws a warning if there are problems and require throws a E_COMPILE_ERROR
 * https://secure.php.net/manual/en/function.require.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

var_dump(require 'exit.php');

/**
 * PHP Warning.
 */
var_dump(require 'fakefile.ext');

