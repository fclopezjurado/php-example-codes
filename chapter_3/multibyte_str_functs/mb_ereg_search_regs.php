<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:43
 *
 * Returns the matched part of a multi byte regular expression.
 * http://php.net/manual/en/function.mb-ereg-search-regs.php
 * @param string $pattern the search pattern.
 * @param string $option the search option. See mb_regex_set_options() for explanation.
 * @return array|bool mb_ereg_search_regs() executes the multi byte regular expression match, and if there are some
 * matched part, it returns an array including substring of matched part as first element, the first grouped part with
 * brackets as second element, the second grouped part as third element, and so on. It returns FALSE on error.
 */

mb_regex_encoding('UTF-8');

$str = "中国abc + abc ?!？！字符＃　china string";
$reg = "\w+";
mb_ereg_search_init("中国abc + abc ?!？！字符＃　china string", "\w+", 'ms');
mb_ereg_search();

$r = mb_ereg_search_getregs(); // get first result

do
{
    var_dump($r);
    $r = mb_ereg_search_regs(); // get next result
}
while($r);