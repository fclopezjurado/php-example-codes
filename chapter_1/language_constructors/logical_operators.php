<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 18/10/2018
 * Time: 17:46
 *
 * AND. TRUE if both $a and $b are TRUE.
 * OR. TRUE if either $a or $b is TRUE.
 * XOR. TRUE if either $a or $b is TRUE, but not both.
 * NOT. TRUE if $a is not TRUE.
 * &&. TRUE if both $a and $b are TRUE.
 * ||. TRUE if either $a or $b is TRUE.
 * https://secure.php.net/manual/en/language.operators.logical.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 * TODO: AND, OR & XOR are boolean operations. Must operate in binary base to resolve the operation.
 */

$a = (false && foo());
$b = (true  || foo());
$c = (false and foo());
$d = (true  or  foo());
$e = false || true;
$f = false or true;

var_dump($e, $f);

$g = true && false;
$h = true and false;

var_dump($g, $h);

