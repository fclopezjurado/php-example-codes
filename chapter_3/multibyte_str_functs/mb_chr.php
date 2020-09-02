<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:38
 *
 * string mb_chr ( int $cp [, string $encoding ] )
 *
 * Get a specific character.
 * http://php.net/manual/en/function.mb-chr.php
 * @param int $cp
 * @param string $encoding. UTF-8 by default.
 * @return string|bool a specific character or FALSE on failure.
 */

var_dump(mb_chr(96, 'ASCII'));
var_dump(mb_chr(50319, 'UCS-4BE'));
var_dump(mb_chr(271));
var_dump(mb_chr(0xC48F, 'UCS-4BE'));
var_dump(mb_chr(0x010F));