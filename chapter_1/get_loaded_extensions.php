<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 14:12
 *
 * Returns an array with the names of all modules compiled and loaded.
 * @param bool zend_extensions only return Zend extensions, if not then regular extensions, like mysqli are listed.
 * Defaults to FALSE (return regular extensions).
 * http://php.net/manual/en/function.get-loaded-extensions.php
 */

var_dump(get_loaded_extensions());
var_dump(get_loaded_extensions(true));
