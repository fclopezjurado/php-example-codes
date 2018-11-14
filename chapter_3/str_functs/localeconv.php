<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:19
 *
 * Get numeric formatting information.
 * Returns an associative array containing localized numeric and monetary formatting information.
 * http://php.net/manual/en/function.localeconv.php
 * @return array data based upon the current locale as set by "setlocale()".
 */

print_r(localeconv());