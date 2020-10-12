<?php
/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:55
 */

$transport = ['foot', 'bike', 'car', 'plane'];
$mode = pos($transport);        // $mode = 'foot';
$mode = next($transport); // $mode = 'bike';
$mode = pos($transport);        // $mode = 'bike';
$mode = prev($transport); // $mode = 'foot';
$mode = end($transport);  // $mode = 'plane';
$mode = pos($transport);        // $mode = 'plane';

$arr = array();
var_dump(pos($arr));

$arr = array(array());
var_dump(pos($arr));