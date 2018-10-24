<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 16/10/2018
 * Time: 18:00
 *
 * The require_once statement is identical to require except PHP will check if the file has already been included, and
 * if so, not include (require) it again.
 * Is identical to include, but include throws a warning if there are problems and require throws a E_COMPILE_ERROR
 * (fatal error).
 * https://secure.php.net/manual/en/function.require-once.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

var_dump(require_once 'exit.php');

/**
 * PHP Warning.
 */
var_dump(require_once 'fakefile.ext');