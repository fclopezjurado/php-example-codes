<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 15/10/2018
 * Time: 17:25
 *
 * Equivalents to exit.
 * http://php.net/manual/es/function.die.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

$site = 'https://www.w3schools.com/';
fopen($site,'r')
or die("Unable to connect to $site");

die(json_encode(array('error' => 'some error')));