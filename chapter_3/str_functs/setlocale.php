<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:22
 *
 * string setlocale ( int $category , string $locale [, string $... ] )
 * string setlocale ( int $category , array $locale )
 *
 * Set locale information.
 * http://php.net/manual/en/function.setlocale.php
 * @param int $category is a named constant specifying the category of the functions affected by the locale setting:
 * @param string $locale if locale is null or the empty string "", the locale names will be set from the values of
 * environment variables with the same names as the above categories, or from "LANG".
 * If locale is "0", the locale setting is not affected, only the current setting is returned.
 * If locale is an array or followed by additional parameters then each array element or parameter is tried to be set
 * as new locale until success. This is useful if a locale is known under different names on different systems or for
 * providing a fallback for a possibly not available locale.
 * @param string[] ... optional string or array parameters to try as locale settings until success.
 * @return string|bool the new current locale, or false if the locale functionality is not implemented on your
 * platform, the specified locale does not exist or the category name is invalid.
 * An invalid category name also causes a warning message. Category/locale names can be found in » RFC 1766 and »
 * ISO 639. Different systems have different naming schemes for locales.
 * NOTE: The return value of setlocale() depends on the system that PHP is running. It returns exactly what the system
 * setlocale function returns.
 * NOTE: This function throws an E_DEPRECATED notice if a string is passed to the category parameter instead of one of
 * the LC_* constants.
 * WARNING: The locale information is maintained per process, not per thread.
 */

setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');
setlocale (LC_COLLATE, 'C');
setlocale(LC_CTYPE, 0);
setlocale(LC_MONETARY, 'es_ES');
setlocale(LC_NUMERIC, 'de_DE');
setlocale(LC_TIME, 'Dutch');
setlocale(LC_MESSAGES, 'es_ES');