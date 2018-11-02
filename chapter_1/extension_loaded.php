<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 14:14
 *
 * Finds out whether the extension is loaded.
 * @param string name the extension name. This parameter is case-insensitive. You can see the names of various
 * extensions by using phpinfo().
 * http://php.net/manual/en/function.extension-loaded.php
 * Returns TRUE if the extension identified by name is loaded, FALSE otherwise.
 */

if (!extension_loaded('gd')) {
    if (!dl('gd.so')) {
        exit;
    }
}