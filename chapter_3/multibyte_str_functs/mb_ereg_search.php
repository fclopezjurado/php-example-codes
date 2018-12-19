<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:43
 *
 * bool mb_ereg_search ([ string $pattern [, string $option = "ms" ]] )
 *
 * Multi byte regular expression match for predefined multi byte string.
 * http://php.net/manual/en/function.mb-ereg-search.php
 * @param string $pattern the search pattern.
 * @param string $option the search option ('ms' by default). See mb_regex_set_options() for explanation.
 * @return bool TRUE if the multibyte string matches with the regular expression, or FALSE otherwise. The string for
 * matching is set by mb_ereg_search_init(). If pattern is not specified, the previous one is used.
 */

mb_regex_encoding('UTF-8');

$str = "中国abc + abc ?!？！字符＃　china string";
$reg = "\w+";
mb_ereg_search_init("中国abc + abc ?!？！字符＃　china string", "\w+", 'ms');
var_dump(mb_ereg_search());

$r = mb_ereg_search_getregs(); // get first result

do
{
    var_dump($r[0]);
    $r = mb_ereg_search_regs(); // get next result
}
while($r);