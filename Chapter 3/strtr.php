<?php

/**
 * Created by PhpStorm.
 * User: franlopez
 * Date: 11/09/18
 * Time: 12:19
 */

/**
 * In this form, strtr() does byte-by-byte translation. Therefore, we are assuming a
 * single-byte encoding here:
 * In this case, function replaces char by char, following this map: [ä => a, å => a, ö => o].
 */
$address = '09479 Houpainenkylä, Pöhjois-Karjala';
$address = strtr($address, "äåö", "aao");

var_dump($address);

/**
 * in this case, replace substrings in string only one time.
 */
$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
$trans = strtr("hi all, I said hello", $trans);

var_dump($trans);