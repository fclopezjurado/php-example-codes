<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 30/10/18
 * Time: 11:49
 *
 * Stores server and execution environment information.
 * https://secure.php.net/manual/en/reserved.variables.server.php
 * $_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array
 * are created by the web server.
 * NOTE: PHP notice when an array element does not exist.
 */

echo $_SERVER['SERVER_NAME'];
