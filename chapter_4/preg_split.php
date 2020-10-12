<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 16:45
 */

define('SUBJECT1', 'hypertext language, programming');
define('SUBJECT2', 'hypertext language, programming, , ');

$keywords1 = preg_split("/[\s,]+/", SUBJECT1, 2);
$keywords2 = preg_split("/[\s,]+/", SUBJECT1, 0);
$keywords3 = preg_split("/[\s,]+/", SUBJECT2, 0);
$keywords3 = preg_split("/[\s,]+/", SUBJECT2, 0, PREG_SPLIT_NO_EMPTY);
$keywords3 = preg_split("/([\s,]+)/", SUBJECT2, 0, PREG_SPLIT_DELIM_CAPTURE);
$keywords3 = preg_split("/[\s,]+/", SUBJECT1, 0, PREG_SPLIT_OFFSET_CAPTURE);

print_r($keywords1);
print_r($keywords2);
print_r($keywords3);