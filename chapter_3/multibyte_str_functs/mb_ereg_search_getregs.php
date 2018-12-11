<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:42
 *
 * Retrieve the result from the last multi byte regular expression match.
 * http://php.net/manual/en/function.mb-ereg-search-getregs.php
 * @return array|bool including the sub-string of matched part by last mb_ereg_search(), mb_ereg_search_pos(),
 * mb_ereg_search_regs(). If there are some matches, the first element will have the matched sub-string, the second
 * element will have the first part grouped with brackets, the third element will have the second part grouped with
 * brackets, and so on. It returns FALSE on error;
 */

mb_regex_encoding('UTF-8');

$str = "中国abc + abc ?!？！字符＃　china string";
$reg = "\w+";
mb_ereg_search_init("中国abc + abc ?!？！字符＃　china string", "\w+", 'ms');
var_dump(mb_ereg_search());

$r = mb_ereg_search_getregs(); //get first result
var_dump($r);

do
{
    $r = mb_ereg_search_regs(); // get next result
    var_dump($r);
}
while($r);