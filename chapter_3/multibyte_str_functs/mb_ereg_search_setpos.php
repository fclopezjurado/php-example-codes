<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:43
 *
 * Set start point of next regular expression match.
 * http://php.net/manual/en/function.mb-ereg-search-setpos.php
 * @param int $position the position to set. If it is negative, it counts from the end of the string.
 * @return bool TRUE on success or FALSE on failure.
 */

mb_regex_encoding('UTF-8');

$str = "中国abc + abc ?!？！字符＃　china string";
$reg = "\w+";
mb_ereg_search_init("中国abc + abc ?!？！字符＃　china string", "\w+", 'ms');
mb_ereg_search_setpos(6);
mb_ereg_search();

$r = mb_ereg_search_getregs(); // get first result

do
{
    var_dump($r);
    $r = mb_ereg_search_regs(); // get next result
}
while($r);