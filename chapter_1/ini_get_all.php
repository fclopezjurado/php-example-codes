<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 13:52
 *
 * Gets all configuration options.
 * @param string extension an optional extension name. If set, the function return only options specific for that
 * extension.
 * @param bool details retrieve details settings or only the current value for each setting. Default is TRUE
 * (retrieve details).
 * http://php.net/manual/en/function.ini-get-all.php
 * Returns an associative array with directive name as the array key. When details is TRUE (default) the array will
 * contain global_value (set in php.ini), local_value (perhaps set with ini_set() or .htaccess), and access (the
 * access level). When details is FALSE the value will be the current value of the option.
 */

print_r(ini_get_all("pcre", false));
print_r(ini_get_all(null, false));