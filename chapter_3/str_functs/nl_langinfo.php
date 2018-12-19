<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:20
 *
 * string nl_langinfo ( int $item )
 *
 * Query language and locale information.
 * Used to access individual elements of the locale categories. Unlike "localeconv()", which returns all of the
 * elements, "nl_langinfo()" allows you to select any specific element.
 * @param int $item item may be an integer value of the element or the constant name of the element. The following is
 * a list of constant names for item that may be used and their description. Some of these constants may not be
 * defined or hold no value for certain locales.
 * @return string|bool returns the element as a string, or false if item is not valid.
 * NOTE: This function is not implemented on Windows platforms.
 */

var_dump(nl_langinfo(ABDAY_1));
var_dump(nl_langinfo(ABDAY_2));
var_dump(nl_langinfo(ABDAY_3));
var_dump(nl_langinfo(ABDAY_4));
var_dump(nl_langinfo(ABDAY_5));
var_dump(nl_langinfo(ABDAY_6));
var_dump(nl_langinfo(ABDAY_7));
var_dump(nl_langinfo(DAY_1));
var_dump(nl_langinfo(DAY_2));
var_dump(nl_langinfo(DAY_3));
var_dump(nl_langinfo(DAY_4));
var_dump(nl_langinfo(DAY_5));
var_dump(nl_langinfo(DAY_6));
var_dump(nl_langinfo(DAY_7));
var_dump(nl_langinfo(ABMON_1));
var_dump(nl_langinfo(ABMON_2));
var_dump(nl_langinfo(ABMON_3));
var_dump(nl_langinfo(ABMON_4));
var_dump(nl_langinfo(ABMON_5));
var_dump(nl_langinfo(ABMON_6));
var_dump(nl_langinfo(ABMON_7));
var_dump(nl_langinfo(ABMON_8));
var_dump(nl_langinfo(ABMON_9));
var_dump(nl_langinfo(ABMON_10));
var_dump(nl_langinfo(ABMON_11));
var_dump(nl_langinfo(ABMON_12));
var_dump(nl_langinfo(MON_1));
var_dump(nl_langinfo(MON_2));
var_dump(nl_langinfo(MON_3));
var_dump(nl_langinfo(MON_4));
var_dump(nl_langinfo(MON_5));
var_dump(nl_langinfo(MON_6));
var_dump(nl_langinfo(MON_7));
var_dump(nl_langinfo(MON_8));
var_dump(nl_langinfo(MON_9));
var_dump(nl_langinfo(MON_10));
var_dump(nl_langinfo(MON_11));
var_dump(nl_langinfo(MON_12));
var_dump(nl_langinfo(AM_STR));
var_dump(nl_langinfo(PM_STR));
var_dump(nl_langinfo(D_T_FMT));
var_dump(nl_langinfo(D_FMT));
var_dump(nl_langinfo(T_FMT));
var_dump(nl_langinfo(T_FMT_AMPM));
var_dump(nl_langinfo(ERA));
var_dump(nl_langinfo(ERA_D_T_FMT));
var_dump(nl_langinfo(ERA_D_FMT));
var_dump(nl_langinfo(ERA_T_FMT));
var_dump(nl_langinfo(CRNCYSTR));
var_dump(nl_langinfo(RADIXCHAR));
var_dump(nl_langinfo(THOUSEP));
var_dump(nl_langinfo(YESEXPR));
var_dump(nl_langinfo(NOEXPR));
var_dump(nl_langinfo(YESSTR));
var_dump(nl_langinfo(NOSTR));
var_dump(nl_langinfo(CODESET));