<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:42
 *
 * int mb_ereg_search_getpos ( void )
 *
 * Returns start point for next regular expression match.
 * http://php.net/manual/en/function.mb-ereg-search-getpos.php
 * @return int the point to start regular expression match for mb_ereg_search(), mb_ereg_search_pos(),
 * mb_ereg_search_regs(). The position is represented by bytes from the head of string.
 */

mb_regex_encoding('UTF-8');

$str = "中国abc + abc ?!？！字符＃　china string";
$reg = "\w+";

mb_ereg_search_init("中国abc + abc ?!？！字符＃　china string", "\w+", 'ms');
var_dump(mb_ereg_search());
var_dump(mb_ereg_search_getpos()); // string(9) "中国abc"