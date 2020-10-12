<?php
/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:55
 */

$transport = ['foot', 'bike', 'car', 'plane'];
$mode = current($transport);    // $mode = 'foot';
$mode = next($transport); // $mode = 'bike';
$mode = next($transport); // $mode = 'car';
$mode = prev($transport); // $mode = 'bike';
$mode = end($transport);  // $mode = 'plane';