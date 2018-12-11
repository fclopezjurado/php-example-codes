<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:43
 *
 * Returns position and length of a matched part of the multi byte regular expression for a predefined multi byte
 * string.
 * http://php.net/manual/en/function.mb-ereg-search-pos.php
 * Returns position and length of a matched part of the multi byte regular expression for a predefined multi byte
 * string. The string for match is specified by mb_ereg_search_init(). If it is not specified, the previous one will be
 * used.
 * @param string $pattern the search pattern.
 * @param string $option the search option ('ms' by default). See mb_regex_set_options() for explanation.
 * @return array|bool an array containing two elements. The first element is the offset, in bytes, where the match
 * begins relative to the start of the search string, and the second element is the length in bytes of the match.
 * If an error occurs, FALSE is returned.
 */

mb_regex_encoding('UTF-8');

$str = "中国abc + abc ?!？！字符＃　china string";
$reg = "\w+";
mb_ereg_search_init("中国abc + abc ?!？！字符＃　china string", "\w+", 'ms');
mb_ereg_search();

$r = mb_ereg_search_getregs(); //get first result

do
{
    var_dump($r);
    var_dump(mb_ereg_search_pos());
    $r = mb_ereg_search_regs(); // get next result
}
while($r);
