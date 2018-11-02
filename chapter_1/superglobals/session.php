<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 12:27
 *
 * An associative array containing session variables available to the current script. See the Session functions
 * documentation for more information on how this is used.
 * http://php.net/manual/en/reserved.variables.session.php
 */

global $wp_pa;
$wp_pa = array( 'elm1' => 'value1', 'elm2' => 'value2');

if (!session_id())
    session_start();

if (!isset($_SESSION['$wp_pa']))
    $_SESSION['$wp_pa'] = array();

if (!isset($_SESSION['$wp_pa']['album']))
    $_SESSION['$wp_pa']['album'] = array();

$_SESSION['$wp_pa']['album'][1234] = 1;
$wp_pa['elm1'] = 'newvalue1';

var_dump($_SESSION);