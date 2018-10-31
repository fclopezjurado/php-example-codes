<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 16:35
 *
 * Create an array.
 * https://secure.php.net/manual/en/function.array.php
 * Language constructor.
 */

$fruits = array(
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);

var_dump($fruits);