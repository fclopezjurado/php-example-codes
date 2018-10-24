<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 16/10/2018
 * Time: 18:00
 *
 * Includes and evaluates the specified file during the execution of the script.
 * https://secure.php.net/manual/en/function.include-once.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

var_dump(include_once 'exit.php');

/**
 * PHP Warning.
 */
var_dump(include_once 'fakefile.ext');