<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:43
 *
 * Setup string and regular expression for a multi byte regular expression match.
 * http://php.net/manual/en/function.mb-ereg-search-init.php
 * mb_ereg_search_init() sets string and pattern for a multi byte regular expression. These values are used for
 * mb_ereg_search(), mb_ereg_search_pos(), and mb_ereg_search_regs().
 * @param string $string the search string.
 * @param string $pattern the search pattern.
 * @param string $option the search option. See mb_regex_set_options() for explanation.
 * @return bool TRUE on success or FALSE on failure.
 */

$str = "中国abc + abc ?!？！字符＃　china string";
$reg = "\w+";

mb_regex_encoding('UTF-8');
var_dump(mb_ereg_search_init("中国abc + abc ?!？！字符＃　china string", "\w+", 'ms'));